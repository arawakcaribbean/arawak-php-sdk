<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 10/05/19
 * Time: 19:49
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
use Awaraks\Mapper\Mail;
use Awaraks\Mapper\MailSimple;
use Awaraks\Mapper\PageResultLocation;


class MailServerController extends BaseController {
    /**
     * @var \JsonMapper
     */
    private $mapper;

    /**
     * ReviewsController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    /**
     * Send Simple Mail , API:"http://api.opencaribbean.org/api/v1/mailsender/email/simple"
     * @param \Awaraks\Entity\MailSimpleEntity $model
     * @return MailSimple $mail
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

    public function sendSimpleMail(\Awaraks\Entity\MailSimpleEntity $model){
        $uri = "/mailsender/email/simple";
        $response = $this->_post($uri,$model->jsonSerialize());
        return $this->mapper->map(json_decode($response), new MailSimple());
    }

    /**
     * Send a EMail with template, API:"http://api.opencaribbean.org/api/v1/mailsender/email/template"
     * @param \Awaraks\Entity\MailEntity $model
     * @return Mail $mail
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

    public function sendMailWithTemplate(\Awaraks\Entity\MailEntity $model){
        $uri = "/mailsender/email/template";
        $response = $this->_post($uri,$model->jsonSerialize());
        return $this->mapper->map(json_decode($response), new Mail());

    }




}