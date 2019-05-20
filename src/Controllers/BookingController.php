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

use Awaraks\Mapper\Bookable;
use Awaraks\Mapper\Booking;
use Awaraks\Mapper\Location;
use Awaraks\Mapper\PageResultLocation;


/**
 * Class BookingController
 * @package Awaraks\Controllers
 */
class BookingController extends BaseController {
    private $mapper;

    /**
     * BookingController constructor.
     */
    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    #Booking Resource

    /**
     * Returns a list with all Booking , API:"http://api.opencaribbean.org/api/v1/booking/bookings?idApp=$idApp&idUser=$idUser&idResource=$idResource&bookingStatus=$bookingStatus&desc=$desc&pagination=$pagination&page=$page&size=$size"
     * @param string $idApp
     * @param string $idUser
     * @param string $idResource
     * @param string $bookingStatus Available values : CREATED, CONFIRMATED, FREE, RUNNING, FINISHED, CANCELED
     * @param boolean $desc
     * @param boolean $pagination
     * @param integer $page
     * @param integer $size
     * @return Booking[]
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
    public function getList($idApp,$idUser,$idResource,$bookingStatus,$desc,$pagination,$page,$size) {
        $uri = "/booking/bookings?idApp=$idApp&idUser=$idUser&idResource=$idResource&bookingStatus=$bookingStatus&desc=$desc&pagination=$pagination&page=$page&size=$size";
        $response = $this->_get($uri);
        return json_decode($response);

    }


    /**
     * Create a object Booking
     * @param \Awaraks\Entity\BookingEntity $model
     * @return Booking $location
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
    public function create(\Awaraks\Entity\BookingEntity $model) {
        $uri = "/booking/bookings";
        $response = $this->_post($uri,json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new Booking());
    }

    /**
     * Update a object Booking
     * @param \Awaraks\Entity\BookingEntity $model
     * @return Booking $data
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
    public function update(\Awaraks\Entity\BookingEntity $model,$id) {
        $uri = "/booking/bookings/$id";
        $response = $this->_post($uri,json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new Booking());
    }


    /**
     * Get a Booking , API:"http://api.opencaribbean.org/api/v1/booking/bookings/:bookingId"
     * @param string $bookingId
     * @return Booking[]
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
    public function getBooking($bookingId) {
        $uri = "/booking/bookings/$bookingId";
        $response = $this->_get($uri);
        return $this->mapper->mapArray(json_decode($response),array(),"Awaraks\\Mapper\\Booking");
    }





    /**
     * Delete a object Booking By ID , API:"http://api.opencaribbean.org/api/v1/booking/bookings/:id"
     * @param $id
     * @return No content
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
        $uri = "/booking/bookings/$id";
        $response = $this->_delete($uri);
        return $response;
    }



    #Bookable Resource

    /**
     * Returns a list with all Bookable , API:"http://api.opencaribbean.org/api/v1/booking/bookables?idApp=$idApp&idUser=$idUser&idResource=$idResource&idRate=$idRate&idLocation=$idLocation&pagination=$pagination&page=$page&size=$size"
     * @param string $idApp
     * @param string $idUser
     * @param string $idRate
     * @param string $idResource
     * @param string $idLocation
     * @param boolean $pagination
     * @param integer $page
     * @param integer $size
     * @return Bookable[]
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
    public function getListBookable($idApp,$idUser,$idRate,$idResource,$idLocation,$pagination,$page,$size) {
        $uri = "/booking/bookables?idApp=$idApp&idUser=$idUser&idResource=$idResource&idRate=$idRate&idLocation=$idLocation&pagination=$pagination&page=$page&size=$size";
        $response = $this->_get($uri);
        return json_decode($response);
    }

    /**
     * List all free bookables moments for a resource between two dates , API:"http://api.opencaribbean.org/api/v1/booking/bookables/free?resourceId=$resourceId&startDate=$startDate&endDate=$endDate"
     * @param string $resourceId
     * @param string $startDate
     * @param string $endDate
     * @return Bookable[]
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
    public function getListBookableFree($resourceId,$startDate,$endDate) {
        $uri = "/booking/bookables/free?resourceId=$resourceId&startDate=$startDate&endDate=$endDate";
        $response = $this->_get($uri);
        return json_decode($response);
    }




    /**
     * Create a object Bookable  , API:"http://api.opencaribbean.org/api/v1/bookable/bookables"
     * @param \Awaraks\Entity\BookableEntity $model
     * @return Booking $data
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
    public function createBookable(\Awaraks\Entity\BookableEntity $model) {
        $uri = "/booking/bookables";
        $response = $this->_post($uri,json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new Bookable());
    }

    /**
     * Update a object Bookable  , API:"http://api.opencaribbean.org/api/v1/bookable/bookables"
     * @param \Awaraks\Entity\BookableEntity $model
     * @return Booking $location
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
    public function updateBookable(\Awaraks\Entity\BookableEntity $model,$id) {
        $uri = "/booking/bookables/$id";
        $response = $this->_post($uri,json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new Bookable());
    }



    /**
     * Get a Bookable , API:"http://api.opencaribbean.org/api/v1/booking/bookables/:bookingId"
     * @param string $bookingId
     * @return Bookable[]
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
    public function getBookable($bookingId) {
        $uri = "/booking/bookables/$bookingId";
        $response = $this->_get($uri);
        return json_decode($response);
    }





    /**
     * Delete a object Bookable By ID , API:"http://api.opencaribbean.org/api/v1/booking/bookables/:id"
     * @param $id
     * @return No content
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
    public function deleteBookable($id) {
        $uri = "/booking/bookables/$id";
        $response = $this->_delete($uri);
        return $response;
    }


}