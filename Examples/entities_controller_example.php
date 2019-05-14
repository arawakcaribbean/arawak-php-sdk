<?php
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload

#Nota:
#-Disconnect each block that is between /* ... */ to test each controller's method

$service = new Awaraks\Controllers\EntitiesController();
try {

    ##NAME ENTITY
    /*
    // Returns a list of name of entities availables, with paging  API: "http://api.opencaribbean.org/api/v1/resource/entities/find?page=0&size=10"
    $page=0;
    $size=25;
    $response = $service->getAvailableEntity($page,$size);
    print_r($response);
    */

    /*
    //  Get if entity is present.API: "http://api.opencaribbean.org/api/v1/resource/entities/find/name?name=string"
    $name="Attraction";
    $response = $service->getIfEntityExistByName($name);
    print_r($response);
    */

    ###RESOURCE
    /*
    //Search using full text search paginate a Resource List. API: "http://api.opencaribbean.org/api/v1/resource/entities/page/search?page=0&query=great&size=10"   $page=0;
   $size=25;
   $page=0;
   $query="great";
   $response = $service->getListEntityWithFilterAndPaginate($page,$size,$query);
   print_r($response);
    */

    /*
    //Search using full text search a Resource List.API: "http://api.opencaribbean.org/api/v1/resource/entities/search?query=great"
    $query="great";
    $response = $service->getListEntityWithFilterWithOutPaginate($query);
    print_r($response);
    */


    /*
    //Get Resource list with paginate by name of type resource.API: "http://api.opencaribbean.org/api/v1/resource/entities?page=0&name=Attraction&size=10"
    $size=25;
    $page=0;
    $name="Attraction";
    $response = $service->getListEntityByNameTypeResourceWithPaginate($page,$size,$name);
    print_r($response);
    */


   //Get a Resource .API: "http://api.opencaribbean.org/api/v1/resource/entities/:id"
   /*
    $id="2qc5i2oBvhGfKisLFk9h";
   $response = $service->get($id);
   print_r($response);
    */

   //Get var boolean if exists a Resource .API: "http://api.opencaribbean.org/api/v1/resource/entities/exists/:id"
    /*
    $id="2qc5i2oBvhGfKisLFk9h";
   $response = $service->getExistResourceById($id);
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