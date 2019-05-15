<?php
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload

#Nota:
#-Disconnect each block that is between /* ... */ to test each controller's method

$service = new Awaraks\Controllers\LocationController();
try {
    #----------get all location,example call function------------#
    /*
        $response = $service->getAll();
        print_r($response);
       */

    #----------Search a location  with filter,example call function------------#
    /*
    $term = "Cu";
    $response = $service->getPageListWithFilter($term);
    print_r($response);
    */

    #----------Create a location,example call function------------#
    /*
    $location = new \Awaraks\Entity\DataLocationEntity(23.23, -82.2332);
    $country = new \Awaraks\Entity\CountryEntity(
        "4adYmmoBvhGfKisLdVf3",
        "Cuba",
        "CU",
        "Habana",
         ["Havana/Cuba"],
        23.2342,
        -83.23648);
        $model = new \Awaraks\Entity\LocationEntity(
        "sdamsd",
        "La Habana",
        "Reporto 12/12",
        $country,
        "example@opencaribbean.com",
        "3434-2",
        $location,
        "Loc-1",
        [],
        "Sur",
        "ddhfjhkjhk-2332",
        "State-1",
        "Address 23, #1232",
        [],
        "89237593847593"
    );


    $response = $service->create($model);
    print_r($response);
    */

    #----------Total of location,example call function------------#
    /*
        $response = $service->getTotal();
        print_r($response);
    */

    #----------Delete a location,example call function------------#
   /*
        $id="wac4i2oBvhGfKisLuU-E";
        $response = $service->delete($id);
        print_r($response);
    */


        #MAPS

       #----------Get info for places id,example call function------------#

       $id="EisxMyBNYXJrZXQgU3RyZWV0LCBXaWxtaW5ndG9uLCBOQyAyODQwMSwgVVNB";
       $response = $service->getPlaceInfo($id);
       print_r($response);



     #----------Get places by search criteria,example call function------------#
    /*
     $id="a";
     $response = $service->getPlaceListByPlaceName($id);
     print_r($response);
    */

    #----------Get the places list near to a location,example call function------------#
    /*
    $origin_lat1=23.2323;
    $origin_lon1=-81.345345;
    $destiny_lat2=23.1233;
    $destiny_lon2=-81.1223;
    $response = $service->getDirectionsMap($origin_lat1,$origin_lon1,$destiny_lat2,$destiny_lon2);
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
} catch (\Awaraks\Controllers\Exceptions\ServiceUnavailableException $e) {
    print_r($e->getMessage());
} catch (\Awaraks\Controllers\Exceptions\ArawaksException $e) {
    print_r($e->getMessage());
}