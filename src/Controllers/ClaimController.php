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

use Awaraks\Mapper\Claim;
use Awaraks\Mapper\ClaimForm;


class ClaimController extends BaseController
{
    private $mapper;

    /**
     * ClaimController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    /**
     * Create a object Claim, API:"http://api.opencaribbean.org/api/v1/claim/claims"
     * @param \Awaraks\Entity\ClaimEntity $model
     * @return Claim $claim
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
    public function create(\Awaraks\Entity\ClaimEntity $model)
    {
        $uri = "claim/claims";
        $response = $this->_post($uri, json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new Claim());
    }

    /**
     * Update a object Claim, API:"http://api.opencaribbean.org/api/v1/claim/claims/:id/:status"
     * @param \Awaraks\Entity\ClaimEntity $model
     * @param $id string Claim Id
     * @param $status string Status Claim, Available values : CLAIMED, REPORTED_BY_MAIL, WIZARD_COMPLETED_BY_CLAIMER, IN_VERIFICATION, ACEPTED, REJECTED_BY_CLAIMER, REJECTED_BY_TIME, REJECTED_BY_ADMIN, STOPPED
     * @return Claim $claim
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
    public function update(\Awaraks\Entity\ClaimEntity $model, $id, $status)
    {
        $uri = "claim/claims/$id/$status";
        $response = $this->_post($uri, json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new Claim());
    }

    /**
     * get a object Claim , API:"http://api.opencaribbean.org/api/v1/claim/claims/:idResource/:idUser"
     * @param string $resourceId
     * @param string $userId
     * @return Claim $claim
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
    public function get($resourceId,$userId)
    {
        $uri = "claim/claims/$resourceId/$userId";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new Claim());
    }


    /**
     * Update a object Claim Form , API:"http://api.opencaribbean.org/api/v1/claim/claimsforms/:id"
     * @param \Awaraks\Entity\FormClaimEntity $model
     * @param string $id
     * @return ClaimForm $claim
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
    public function updateForm(\Awaraks\Entity\FormClaimEntity $model,$id)
    {
        $uri = "claim/claimsforms/$id";
        $response = $this->_post($uri, json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new ClaimForm());
    }

    /**
     * Create a object Claim Form  , API:"http://api.opencaribbean.org/api/v1/claim/claimsforms"
     * @param \Awaraks\Entity\FormClaimEntity $model
     * @return ClaimForm $claim
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
    public function createForm(\Awaraks\Entity\FormClaimEntity $model)
    {
        $uri = "claim/claimsforms";
        $response = $this->_post($uri, json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new ClaimForm());
    }
}