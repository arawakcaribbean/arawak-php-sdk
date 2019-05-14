# PHP SDK for Arawak Platform


[arawak-php-sdk](https://github.com/arawakcaribbean/arawak-php-sdk) is a library for access to API REST  for Arawaks Platform for PHP 5.3+.  Basically provide the features and flexibility to get the job done and make those features really easy to use.

Features

 - Support to module Booking and Bookable Resource
 - Support to module Resource (Attraction,Accommodation, Event and TransportationOperators types)
 - Support to module Claim a Resource
 - Support to module to manager Country
 - Support to module Location (Georeference and maps points)
 - Support to module Reviews (state and evaluation a Resource)


# Installation 
## Install from Source
arawak-php-sdk is PSR-0 compliant and can be installed using [composer](http://getcomposer.org/).

 - Download project from [arawak-php-sdk](https://github.com/arawakcaribbean/arawak-php-sdk) 
 - Into folder that contains a source code
 - Exec php composer.phar install
        
        php composer.phar install

# Examples

In the root folder on project exists a folder "Examples" that contains various code examples to call function from modules.
For example:

    <?php
    require_once __DIR__ . './../vendor/autoload.php'; // Autoload files using Composer autoload
    $service = new Awaraks\Controllers\EntitiesController();
    try {
    // Returns a list of name of entities availables, with paging  API: "http://api.opencaribbean.org/api/v1/resource/entities/find?page=0&size=10"
        $page=0;
        $size=25;
        $response = $service->getAvailableEntity($page,$size);
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