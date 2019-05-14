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


class StatsController extends BaseController {
    /**
     * @var \JsonMapper
     */
    private $mapper;


    /**
     * StatsController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

}