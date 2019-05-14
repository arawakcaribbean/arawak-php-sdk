<?php
/**
 * Created by PhpStorm.
 * User: yasiel
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
     * Returns a list with all Booking , API:"http://api.opencaribbean.org/api/v1/booking/bookings"
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
    public function getAll() {
        $uri = "/booking/bookings";
        $response = $this->_get($uri);
        return $this->mapper->mapArray(json_decode($response),array(),"Awaraks\\Mapper\\Booking");

    }

    /**
     * Returns a list with all Booking , API:"http://api.opencaribbean.org/api/v1/booking/bookings/history"
     * @param string $iduser user Id by get Booking
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
    public function getBookingHistory($iduser) {
        $uri = "/booking/bookings/history?iduser=$iduser";
        $response = $this->_get($uri);
        return $this->mapper->mapArray(json_decode($response),array(),"Awaraks\\Mapper\\Booking");
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
     * Get a Booking By user , API:"http://api.opencaribbean.org/api/v1/booking/bookings/:bookingId/:userId"
     * @param string $iduser user Id by get Booking
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
    public function getBookingByUser($iduser,$bookingId) {
        $uri = "/booking/bookings/$bookingId/$iduser";
        $response = $this->_get($uri);
        return $this->mapper->mapArray(json_decode($response),array(),"Awaraks\\Mapper\\Booking");
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
     * Get a Booking By resource Id and range of date , API:"http://api.opencaribbean.org/api/v1/booking/bookings/:bookingId/:startdate/:enddate"
     * @param string $bookingId
     * @param string $startdate
     * @param string $enddate
     * @return Booking[] $data
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
    public function getBookingByResourceAndDateRange($bookingId,$startdate,$enddate) {
        $uri = "/booking/bookings/$bookingId/$startdate/$enddate";
        $response = $this->_get($uri);
        return json_decode($response);
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
     * Returns a list with all Bookable , API:"http://api.opencaribbean.org/api/v1/bookable/bookables"
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
    public function getAllBookables() {
        $uri = "/booking/bookables";
        $response = $this->_get($uri);
        return $this->mapper->mapArray(json_decode($response),array(),"Awaraks\\Mapper\\Bookable");

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
     * Get a Bookable By resource Id and range of date , API:"http://api.opencaribbean.org/api/v1/booking/bookables/:bookingId/:startdate/:enddate"
     * @param string $bookingId
     * @param string $startdate
     * @param string $enddate
     * @return Bookable[] $data
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
    public function getBookableByResourceAndDateRange($bookingId,$startdate,$enddate) {
        $uri = "/booking/bookables/$bookingId/$startdate/$enddate";
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