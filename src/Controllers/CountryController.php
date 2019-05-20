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
     * Returns a list of countries , API:"http://api.opencaribbean.org/api/v1/location/countries?countryCode=CU&page=0&pagination=true&query=cu&size=10"
     *
     * @param string $query Partially name of country
     * @param string $countryCode
     * @param boolean $pagination
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
    public function getList($countryCode,$query,$pagination, $page, $size) {
        $uri = "location/countries?query=$query&countryCode=$countryCode&pagination=$pagination&page=$page&size=$size";
        $response = $this->_get($uri);
        return json_decode($response);

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