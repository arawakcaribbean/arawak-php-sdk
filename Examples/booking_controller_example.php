<?php
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload

#Nota:
#-Disconnect each block that is between /* ... */ to test each controller's method

$service = new Awaraks\Controllers\BookingController();
try {

    #######    BOOKING
    #----------get all booking,example call function------------#
    /*
        $response = $service->getAll();
        print_r($response);
    */
   #----------get history booking,example call function------------#
     /*
        $iduser="";
        $response = $service->getBookingHistory($iduser);
        print_r($response);
    */
    #----------create object booking,example call function------------#
    /*
    $model = new \Awaraks\Entity\BookingEntity("003bca0f-2865-45e5-aee2-02b331d96401","2022-05-14T04:00:45.065Z","2019-05-14T04:00:45.065Z","web-demo","2734c2u2u34yi2u3423","83274jk34k2kjhkj23423","CREATED");
    $response = $service->create($model);
    print_r($response);
    */

    #----------get booking By User,example call function------------#
    /*
       $iduser="";
       $idResource="";
       $response = $service->getBookingByUser($idResource,$iduser);
       print_r($response);
    */
    #----------get booking ,example call function------------#
    /*
    $idResource="";
    $response = $service->getBooking($idResource);
    print_r($response);
    */
    #----------delete booking ,example call function------------#
    /*
    $idResource="e32da60d-5c66-4f33-a672-94b9a59d37f2";
    $response = $service->delete($idResource);
    print_r($response);
    */

    #----------get booking by resource and date range ,example call function------------#

    /*
    $idResource="e32da60d-5c66-4f33-a672-94b9a59d37f2";
    $startDate="2022-05-14T04:00:45.065Z";
    $endDate="2022-05-14T04:00:45.065Z";
    $response = $service->getBookingByResourceAndDateRange($idResource,$startDate,$endDate);
    print_r($response);
    */





    #######    BOOKABLE
    #----------get all Bookable,example call function------------#
        /*
        $response = $service->getAllBookables();
        print_r($response);
        */

    #----------create object Bookable,example call function------------#

    $model = new \Awaraks\Entity\BookableEntity("2022-05-14T04:00:45.065Z","2019-05-14T04:00:45.065Z","web-demo","2734c2u2u34yi2u3423","83274jk34k2kjhkj23423","jdfhjsd234jhk2j34",true);
    $response = $service->createBookable($model);
    print_r($response);


    #----------get Bookable,example call function------------#

       $id="ffab0162-d890-46c3-8cb9-e6c924713e94";
       $response = $service->getBookable($id);
       print_r($response);


    #----------delete Bookable ,example call function------------#

    $idResource="e32da60d-5c66-4f33-a672-94b9a59d37f2";
    $response = $service->delete($idResource);
    print_r($response);


    #----------get Bookable by resource and date range ,example call function------------#


    $idResource="e32da60d-5c66-4f33-a672-94b9a59d37f2";
    $startDate="2022-05-14T04:00:45.065Z";
    $endDate="2022-05-14T04:00:45.065Z";
    $response = $service->getBookableByResourceAndDateRange($idResource,$startDate,$endDate);
    print_r($response);



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