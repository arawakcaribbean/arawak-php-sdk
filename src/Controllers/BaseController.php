<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 6/05/19
 * Time: 18:15
 */

namespace Awaraks\Controllers;

use Httpful\Http;
use Symfony\Component\Dotenv\Dotenv;
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
 * Class BaseController
 * @package Awaraks\Controllers
 */
class BaseController
{
    /**
     * BaseController constructor.
     */
    protected function __construct()
    {
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/../.env');
    }


    /**
     * @param $method
     * @param $uri
     * @param $body
     * @return string
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
    protected function initRequest($method, $uri, $body){
        try{
            $uri=$_ENV['AWARAKS_API'].$uri;
            $token=$_ENV['AUTH_TOKEN'];
            $request = \Httpful\Request::init();
            $request->addHeader('Accept', 'application/json');
            $request->addHeader('Authorization', 'Bearer '.$token);
            $request->addHeader('Content-Type', 'application/json');
            $request->addHeader('Client', 'awaraks-php-sdk');
            $response=null;
            switch ($method){
                case 'GET':
                    $request->method(Http::GET)->uri($uri);
                    $response = $request->expectsJson()->sendIt();
                    break;
                case 'POST':
                    $request->method(Http::POST)->body($body)->uri($uri)->mime('application/json');
                    $response = $request->expectsJson()->sendIt();
                    break;
                case 'PUT':
                    $request->method(Http::PUT)->body($body)->uri($uri)->mime('application/json');
                    $response = $request->expectsJson()->sendIt();
                    break;
                case 'DELETE':
                    $request->method(Http::DELETE)->uri($uri);
                    $response = $request->expectsJson()->sendIt();
                    break;
            }
            switch ($response->code){
                case 400:
                    throw new BadRequestException($response->body->message);
                    break;
                case 503:
                    throw new ServiceUnavailableException($response->body->message);
                    break;
                case 502:
                    throw new BadGatewayException($response->body->message);
                    break;
                case 403:
                    throw new ForbiddenException($response->body->message);
                    break;
                case 500:
                    throw new InternalServerErrorException($response->body->message);
                    break;
                case 404:
                    throw new NotFoundException("Not Found");
                    break;
                case 401:
                    throw new UnauthorizedException($response->body->message);
                    break;
                case 412:
                    $msg="Gone";
                    if (strpos($uri, 'claim') !== false) {
                        $msg="This resource was claimed previously by this user, only a claim by resource is allowed";
                    }
                    throw new ArawaksException(412,$msg,null);
                case 418:
                        throw new ArawaksException(418,"Special code, see the header code and message to check error occurred",null);
                    break;
                case 406:
                    throw new ArawaksException(406,"The end date should be more greater than start date",null);
                    break;
                case 504:
                    throw new GatewayTimeoutException($response->body->message);
                    break;
                case 200:
                case 201:
                case 202:
                case 204:
                    return $this->requestSuccess($response);
                    break;
                default:
                    print_r($response);die;
                    throw new ArawaksException($response->code,$response->body->message,null);
                    break;
            }
        }catch (\Exception $e){
            throw new ArawaksException($e->getCode(),$e->getMessage(),null);
        }

    }

    /**
     * @param $uri Url to request
     * @return array
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
    protected function _get($uri)
    {
        return $this->initRequest('GET',$uri,null) ;
    }


    /**
     * @param $uri
     * @param $body
     * @return string
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
    protected function _post($uri, $body)
    {
        return $this->initRequest('POST',$uri,$body) ;

    }

    /**
     * @param $uri
     * @param $body
     * @return string
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
    protected function _put($uri, $body)
    {
        return $this->initRequest('PUT',$uri,$body) ;
    }

    /**
     * @param $uri
     * @return string
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
    protected function _delete($uri)
    {
        return $this->initRequest('DELETE',$uri,null) ;
    }


    /**
     * @param \Httpful\Response $response
     * @return string
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
    protected function requestSuccess(\Httpful\Response $response)
    {
        return $response->raw_body;

    }

}