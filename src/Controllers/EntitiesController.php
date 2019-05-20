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
     * API: "http://api.opencaribbean.org/api/v1/resource/entities?entityName=Attaction&page=1&pagination=false&query=great&size=10"
     * @param string $entityName
     * @param string $query
     * @param boolean $pagination
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
    public  function getList($entityName,$query,$pagination,$page,$size){
        $uri = "/resource/entities?entityName=$entityName&query=$query&pagination=$pagination&page=$page&size=$size";
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



}