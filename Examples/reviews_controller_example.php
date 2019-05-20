<?php
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload

#Nota:
#-Disconnect each block that is between /* ... */ to test each controller's method


$service = new Awaraks\Controllers\ReviewsController();
try {
    #----------Create a evaluation reviews ,example call function------------#

    
    $model = new \Awaraks\Entity\ReviewEvaluationEntity("2019-05-12T19:26:03.571+0000","sdfsd","sdfsd","sdfsdf",5);
    $response = $service->createReviewEvaluation($model);
    print_r($response);
    

    #----------Get average evaluation of resource ,example call function------------#

    $idResource="F6c8i2oBvhGfKisLElHH";
    $response = $service->getEvaluation($idResource);
    print_r($response);

    #----------Get evaluation of resource by user ,example call function------------#

    $idResource="F6c8i2oBvhGfKisLElHH";
    $idUser="user-id";
    $response = $service->getEvaluationByUser($idResource,$idUser);
    print_r($response);

    #----------Delete a evaluation,example call function------------#
   /*
    $id="AKeUrWoBvhGfKisLpliW";
    $response = $service->delete($id);
    print_r($response);
    */


    #----------Create a state reviews ,example call function------------#

    /*
    $model = new \Awaraks\Entity\ReviewStateEntity("2019-05-12T19:26:03.571+0000","sdfsd","sdfsd","sdfsdf","LIKE");
    $response = $service->createReviewState($model);
    print_r($response);
    */

    #----------Get average evaluation of resource ,example call function------------#

    $idResource="F6c8i2oBvhGfKisLElHH";
    $response = $service->getState($idResource);
    print_r($response);

    #----------Get evaluation of resource by user ,example call function------------#

    $idResource="F6c8i2oBvhGfKisLElHH";
    $idUser="user-id";
    $response = $service->getStateByUser($idResource,$idUser);
    print_r($response);

    #----------Delete a evaluation,example call function------------#
    /*
     $id="AKeUrWoBvhGfKisLpliW";
     $response = $service->deleteState($id);
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