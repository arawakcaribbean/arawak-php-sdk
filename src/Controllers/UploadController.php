<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 10/05/19
 * Time: 19:44
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


class UploadController extends BaseController {
    private $mapper;

    /**
     * UploadController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    /**
     * Upload File  , API:"http://api.opencaribbean.org/api/v1/media/upload"
     * @param File $file
     * @return File $file
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
    public function uploadFile($file)
    {
        $uri = "/media/upload";
        $response=$this->upload($uri,$file);
        print_r($response);die;

    }

}