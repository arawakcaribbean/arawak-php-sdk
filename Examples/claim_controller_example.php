<?php
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload

#Nota:
#-Disconnect each block that is between /* ... */ to test each controller's method

$service = new Awaraks\Controllers\ClaimController();
try {
#----------Create a claim,example call function------------#
    /*
    $model = new \Awaraks\Entity\ClaimEntity("app-client", "sdfsdf","sjdfhsjkdfskdfsd","asdjyu2y32");
    $response = $service->create($model);
    print_r($response);
    */

#----------Update a claim,example call function------------#
    /*
    $model = new \Awaraks\Entity\ClaimEntity("app-client", "sdfsdf","sjdfhsjkdfskdfsd","asdjyu2y32");
    $id = "sdfsdfsdfsdf";
    $status ="CLAIMED";
    $response = $service->update($model,$id,$status);
    print_r($response);
    */


    #----------Get a claim,example call function------------#
    /*
    $resourceId = "sjdfhsjkdfskdfsd";
    $userId ="asdjyu2y32";
    $response = $service->get($resourceId,$userId);
    print_r($response);
    */

    #----------Create a form input claim,example call function------------#

    $model = new \Awaraks\Entity\FormClaimEntity("Calle #122", "2019-05-11T19:10:51.011Z","user@arawaks.com","Vlamidor Perez", "163ab94f-514c-4c8a-8a18-c08458f48a31","asdjyu2y32","342-234-234","url","Reason for claim");
    $response = $service->createForm($model);
    print_r($response);

    #----------Update a form input claim,example call function------------#
    /*
    $model = new \Awaraks\Entity\FormClaimEntity("Calle #122", "2019-05-11T19:10:51.011Z","user@arawaks.com","Vlamidor Perez", "163ab94f-514c-4c8a-8a18-c08458f48a31","asdjyu2y32","342-234-234","url","Reason for claim");
    $id="163ab94f-514c-4c8a-8a18-c08458f48a31";
    $response = $service->update($model,$id);
    print_r($response);
    */

} catch (\Awaraks\Controllers\Exceptions\BadRequestException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\BadGatewayException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\ForbiddenException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\GatewayTimeoutException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\NotFoundException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\UnauthorizedException   $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\InternalServerErrorException $e) {
    print_r($e->getMessage());
}catch (\Awaraks\Controllers\Exceptions\ServiceUnavailableException $e) {
    print_r($e->getMessage());
}catch (\Awaraks\Controllers\Exceptions\ArawaksException $e) {
    print_r($e->getMessage());
}