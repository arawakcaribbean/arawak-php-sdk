<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 8/05/19
 * Time: 22:32
 */
namespace Awaraks\Controllers;
use Awaraks\Controllers\Exceptions\BadRequestException;
use Awaraks\Controllers\Exceptions\BadGatewayException;
use Awaraks\Controllers\Exceptions\ForbiddenException;
use Awaraks\Controllers\Exceptions\GatewayTimeoutException;
use Awaraks\Controllers\Exceptions\InternalServerErrorException;
use Awaraks\Controllers\Exceptions\NotFoundException;
use Awaraks\Controllers\Exceptions\ServiceUnavailableException;
use Awaraks\Controllers\Exceptions\UnauthorizedException;
use Awaraks\Controllers\Exceptions\ArawaksException;

use Awaraks\Mapper\Location;
use Awaraks\Mapper\PageResultLocation;


/**
 * Class LocationController
 * @package Awaraks\Controllers
 */
class LocationController extends BaseController {
    private $mapper;
    /**
     * CountryController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    /**
     * Returns a list with all locations , API:"http://api.opencaribbean.org/api/v1/location/locations"
     * @return Location[]
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function getAll() {
        $uri = "location/locations";
        $response = $this->_get($uri);
        return $this->mapper->mapArray(json_decode($response),array(),"Awaraks\\Mapper\\Location");

    }

    /**
     * Returns a list of locations applying filters with paging, API:"http://api.opencaribbean.org/api/v1/location/locations/_search?query=cuba"
     * @param string $query term of search
     * @return PageResultCountry $pageResultCountry
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function getPageListWithFilter($query) {
        $uri = "location/locations/_search?query=$query";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new PageResultLocation());

    }

    /**
     * Create a object Location
     * @param \Awaraks\Entity\LocationEntity $model
     * @return Location $location
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function create(\Awaraks\Entity\LocationEntity $model) {
        $uri = "location/locations";
        $response = $this->_post($uri,json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new Location());
    }

    /**
     * Get total of Locations , API:"http://api.opencaribbean.org/api/v1/location/locations/size"
     * @return Location $location
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function getTotal($id) {
        $uri = "location/locations/size";
        $response = $this->_get($uri);
        return $response;
    }

    /**
     * Delete a Locations , API:"http://api.opencaribbean.org/api/v1/location/locations/:id"
     * @param integer $id
     * @return Location $location
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function delete($id) {

        $uri = "location/locations/$id";
        $response = $this->_delete($uri);
        return $response;
    }



    #MAPS
    /**
     * Get info for places id , API:"http://api.opencaribbean.org/api/v1/maps/places/{placeId}"
     * @params string $placeId
     * @return \stdClass $mapInfo
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function getPlaceInfo($placeId) {
        $uri = "/location/maps/places/$placeId";
        $response = $this->_get($uri);
        return json_decode($response);

    }


    /**
     * Get places by search criteria , API:"http://api.opencaribbean.org/api/v1/maps/places/name/{placeName}"
     * @params string $placeName
     * @return \stdClass[] $mapInfo
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function getPlaceListByPlaceName($placeName) {
        $uri = "/location/maps/places/name/$placeName";
        $response = $this->_get($uri);
        return json_decode($response);

    }

    /**
     * Get the places list near to a location , API:"http://api.opencaribbean.org/api/v1/maps/directions/{origin_lat1}/{origin_lon1}/{destiny_lat2}/{destiny_lon2}"
     * @params string $origin_lat1
     * @params string $origin_lon1
     * @params string $destiny_lat2
     * @params string $destiny_lon2
     * @return \stdClass $mapInfo
     * @throws BadRequestException
     * @throws BadGatewayException
     * @throws ForbiddenException
     * @throws BadGatewayException
     * @throws GatewayTimeoutException
     * @throws InternalServerErrorException
     * @throws NotFoundException
     * @throws ServiceUnavailableException
     * @throws UnauthorizedException
     * @throws ArawaksException

     */
    public function getDirectionsMap($origin_lat1,$origin_lon1,$destiny_lat2,$destiny_lon2) {
        $uri = "/location/maps/directions/$origin_lat1/$origin_lon1/$destiny_lat2/$destiny_lon2";
        $response = $this->_get($uri);
        return json_decode($response);

    }







}