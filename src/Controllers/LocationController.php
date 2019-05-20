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
     * Returns a list of locations , API:"http://api.opencaribbean.org/api/v1/location/locations?countryName=CU&page=0&pagination=false&query=melia&resourceId=sdfsdf&size=10"
     * @return Location[]
     * @param string $countryId
     * @param string $countryName
     * @param string $query
     * @param string $resourceId
     * @param boolean $pagination
     * @param integer $page
     * @param integer $size
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
    public function getList($countryName,$page,$pagination,$query,$resourceId,$size) {
        $uri = "location/locations?countryName=$countryName&page=$page&pagination=$pagination&query=$query&resourceId=$resourceId&size=$size";
        $response = $this->_get($uri);
        return json_decode($response);

    }

    /**
     * Get a location by id , API:"http://api.opencaribbean.org/api/v1/location/locations/sd"
     * @return Location
     * @param string $id
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
    public function get($id) {
        $uri = "location/locations/$id";
        $response = $this->_get($uri);
        return json_decode($response);

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
     * Get info for places id , API:"http://api.opencaribbean.org/api/v1/maps/places?placeId=zxcxc"
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
    public function getPlace($placeId) {
        $uri = "/location/maps/place?placeId=$placeId";
        $response = $this->_get($uri);
        return json_decode($response);

    }


    /**
     * Get places by search criteria , API:"http://api.opencaribbean.org/api/v1/location/maps/places?name=sdfsd"
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
    public function getPlaceList($placeName) {
        $uri = "/location/maps/places?name=$placeName";
        $response = $this->_get($uri);
        return json_decode($response);

    }









}