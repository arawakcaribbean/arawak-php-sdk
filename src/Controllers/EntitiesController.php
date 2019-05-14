<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 10/05/19
 * Time: 19:46
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
use Awaraks\Mapper\Resource\PageResultAvailableEntity;
use Awaraks\Mapper\Resource\PageResultEntity;


/**
 * Class EntitiesController
 * @package Awaraks\Controllers
 */
class EntitiesController extends BaseController {
    /**
     * @var \JsonMapper
     */
    private $mapper;


    /**
     * EntitiesController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    /**
     * Returns a list of name of entities availables, with paging
     * API: "http://api.opencaribbean.org/api/v1/resource/entities/find?page=0&size=10"
     * @param integer $page  Page to list
     * @param integer $size  Count element by page to list
     * @return PageResultAvailableEntity $pageResultAvailableEntity
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
    public  function getAvailableEntity($page,$size){
        $uri = "/resource/entities/find?page=$page&size=$size";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new PageResultAvailableEntity());
    }

    /**
     * Get if entity is present.
     * API: "http://api.opencaribbean.org/api/v1/resource/entities/find/name?name=string"
     * @param string $name name of entity
     * @return boolean $exist
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
    public  function getIfEntityExistByName($name){
        $uri = "/resource/entities/find/name?name=$name";
        $response = $this->_get($uri);
        return $response;
    }

    /**
     * Search using full text search paginate a Resource List.
     * API: "http://api.opencaribbean.org/api/v1/resource/entities/page/search?page=0&query=great&size=10"
     * @param string $query Partially name of entity
     * @param integer $page  Page to list
     * @param integer $size  Count element by page to list
     * @return PageResultEntity $entity Dinamic Object with Entity Resource Data
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
    public  function getListEntityWithFilterAndPaginate($page,$size,$query){
        $uri = "/resource/entities/page/search?page=$page&query=$query&size=$size";
        $response = $this->_get($uri);
        return json_decode($response);
    }

    /**
     * Search using full text search a Resource List.
     * API: "http://api.opencaribbean.org/api/v1/resource/entities/search?query=great"
     * @param string $query Partially name of entity
     * @return \stdClass[] $entityList Dinamic Object with Entity Resource Data
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
    public  function getListEntityWithFilterWithOutPaginate($query){
        $uri = "/resource/entities/search?query=$query";
        $response = $this->_get($uri);
        return json_decode($response);
    }

    /**
     * Get Resource list with paginate by name of type resource.
     * API: "http://api.opencaribbean.org/api/v1/resource/entities?page=0&name=Attraction&size=10"
     * @param string $name name of type resource
     * @param integer $page  Page to list
     * @param integer $size  Count element by page to list
     * @return PageResultEntity $entity Dynamic Object with Entity Resource Data
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
    public  function getListEntityByNameTypeResourceWithPaginate($page,$size,$name){
        $uri = "/resource/entities?page=$page&name=$name&size=$size";
        $response = $this->_get($uri);
        return json_decode($response);
    }

    /**
     * Get a resource.
     * API: "http://api.opencaribbean.org/api/v1/resource/entities/:id"
     * @param string $id Id of a resource
     * @return \stdClass $entity Dynamic Object with Entity Resource Data
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
    public  function get($id){
        $uri = "/resource/entities/$id";
        $response = $this->_get($uri);
        return json_decode($response);
    }

    /**
     * Get boolean var if exist resource by id.
     * API: "http://api.opencaribbean.org/api/v1/resource/entities/exists/:id"
     * @param string $id id of resource
     * @return boolean $exist
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
    public  function getExistResourceById($id){
        $uri = "/resource/entities/exists/$id";
        $response = $this->_get($uri);
        return $response;
    }


    /**
     * Create a object Resource
     * @param \Awaraks\Entity\Resource\Resource $model
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
    /*
    public function create(\Awaraks\Entity\Resource\Resource $model) {
        $uri = "/resource/entities";
        $response = $this->_post($uri,$model->jsonSerialize());
        return json_decode($response);
    }
    */

}