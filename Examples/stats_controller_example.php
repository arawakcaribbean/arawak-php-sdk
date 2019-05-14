<?php
require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload

#Nota:
#-Disconnect each block that is between /* ... */ to test each controller's method


$service = new Awaraks\Controllers\StatsController();
try {
    #----------get all ,example call function------------#
    /*
        $response = $service->getAll();
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