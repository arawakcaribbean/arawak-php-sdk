<?php 
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload
try {
        #Nota:
            #-Disconnect each block that is between /* ... */ to test each controller's method

        $service = new Awaraks\Controllers\CountryController();
        #----------Search a country  with pagination and filter,example call function------------#
        /*
        $term="Cu";
        $page=0;
        $size=25;
        $response = $service->getPageListWithFilter($term,$page,$size);
        print_r($response);
        */

        #----------Create a country,example call function------------#
        /*
        $country = new \Awaraks\Entity\CountryEntity("skdfu2372hjdf723723i","Cuba",
                                             "CU",
                                             "Habana",[],
                                             23.2342,-83.23648);

        $response = $service->create($country);
        print_r($response);
        */

        #----------Delete a country,example call function------------#

            $ID = "26cOmWoBvhGfKisLO1dR";
            $response = $service->delete($ID);
            print_r($response);


        #----------get all country,example call function------------#
          /*
            $response = $service->getAll();
            print_r($response[0]);
          */
        #----------list a country with pagination,example call function------------#
        /*
            $page=0;
            $size=25;
            $response = $service->getPageList($page,$size);
            print_r($response);
        */

        #----------get a country by id,example call function------------#
            /*
            $id="v6cNi2oBvhGfKisLpU4m";
            $response = $service->get($id);
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