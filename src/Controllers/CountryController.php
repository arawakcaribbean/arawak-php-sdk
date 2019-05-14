<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 6/05/19
 * Time: 16:43
 */
namespace Awaraks\Controllers;

use Awaraks\Mapper\Country;
use Awaraks\Mapper\PageResultCountry;
use Awaraks\Controllers\Exceptions\BadRequestException;
use Awaraks\Controllers\Exceptions\BadGatewayException;
use Awaraks\Controllers\Exceptions\ForbiddenException;
use Awaraks\Controllers\Exceptions\GatewayTimeoutException;
use Awaraks\Controllers\Exceptions\InternalServerErrorException;
use Awaraks\Controllers\Exceptions\NotFoundException;
use Awaraks\Controllers\Exceptions\ServiceUnavailableException;
use Awaraks\Controllers\Exceptions\UnauthorizedException;
use Awaraks\Controllers\Exceptions\ArawaksException;

/**
 * Class CountryController
 * @package Awaraks\Controllers
 */
class CountryController extends BaseController {
    private $mapper;
    /**
     * CountryController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    /**
     * Returns a list of countries applying filters and parameters for paging, API:"http://api.opencaribbean.org/api/v1/location/countries/search?name=cuba&page=1&size=10"
     *
     * @param string $query Partially name of country
     * @param integer $page  Page to list
     * @param integer $size  Count element by page to list
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
    public function getPageListWithFilter($query, $page, $size) {
        $uri = "location/countries/search?name=$query&page=$page&size=$size";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new PageResultCountry());

    }

    /**
     * Returns a list of countries parameters for paging  API:"http://api.opencaribbean.org/api/v1/location/countries/list?page=1&size=10"
     * @param integer $page  Page to list
     * @param integer $size  Count element by page to list
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
    public function getPageList($page, $size) {
        $uri = "location/countries/list?page=$page&size=$size";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new PageResultCountry());

    }

    /**
     * Returns a list with all countries, API:"http://api.opencaribbean.org/api/v1/location/countries"
     * @return Country[]
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
        $uri = "location/countries";
        $response = $this->_get($uri);
        return $this->mapper->mapArray(json_decode($response),array(),"Awaraks\Mapper\Country");
    }




    /**
     * Create a object Country , API:"http://api.opencaribbean.org/api/v1/location/countries"
     * @param \Awaraks\Entity\CountryEntity $model
     * @return Country $country
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
    public function create(\Awaraks\Entity\CountryEntity $model) {
        $uri = "location/countries";
        $response = $this->_post($uri,$model->jsonSerialize());
        return $this->mapper->map(json_decode($response), new Country());
    }

    /**
     * Get a object Country by ID , API:"http://api.opencaribbean.org/api/v1/location/countries/:id"
     * @param string $id
     * @return Country $country
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
        $uri = "location/countries/$id";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new Country());
    }


    /**
     * Delete a object Country By ID , API:"http://api.opencaribbean.org/api/v1/location/countries/:id"
     * @param $id
     * @return Country $country
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
        $uri = "location/countries/$id";
        $response = $this->_delete($uri);
        return $response;
    }
}