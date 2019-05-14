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

use Awaraks\Entity\ReviewEvaluationEntity;

use Awaraks\Entity\ReviewStateEntity;
use Awaraks\Mapper\ReviewEvaluation;
use Awaraks\Mapper\ReviewState;
use Awaraks\Mapper\StateReviewResource;


class ReviewsController extends BaseController {
    private $mapper;

    public function __construct(){
        parent::__construct();
        $this->mapper = new \JsonMapper();
    }

    //#########EVALUATION
    /**
     * Create a object ReviewEvaluation, API:"http://api.opencaribbean.org/api/v1/review/evaluations"
     * @param \Awaraks\Entity\ReviewEvaluationEntity $model
     * @return ReviewEvaluation $evaluation
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
    public function createReviewEvaluation(ReviewEvaluationEntity $model){
        $uri = "review/evaluations";
        $response = $this->_post($uri,json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new ReviewEvaluation());
    }

    /**
     * Get average evaluation of resource, API:"http://api.opencaribbean.org/api/v1/review/evaluations/resource/:resourceId"
     * @param string $resourceId
     * @return integer $average
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
    public function getEvaluation($resourceId){
        $uri = "review/evaluations/resource/$resourceId";
        $response = $this->_get($uri);
        return $response;
    }

    /**
     * Get evaluation of resource and user , API:"http://api.opencaribbean.org/api/v1/review/evaluations/resource/:resourceId/user/:userId"
     * @param string $resourceId
     * @param string $userId
     * @return ReviewEvaluation $evaluation
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
    public function getEvaluationByUser($resourceId,$userId){
        $uri = "review/evaluations/resource/$resourceId/user/$userId";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new ReviewEvaluation());
    }

    /**
     * Delete a Evaluation , API:"http://api.opencaribbean.org/api/v1/review/evaluations/:id"
     * @param integer $id
     * @return string $location
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

        $uri = "review/evaluations/$id";
        $response = $this->_delete($uri);
        return $response;
    }


    //#########LIKE



    /**
     * Create a object ReviewStateEntity , API:"http://api.opencaribbean.org/api/v1/review/states"
     * @param \Awaraks\Entity\ReviewStateEntity $model
     * @return ReviewState $state
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
    public function createReviewState(ReviewStateEntity $model){
        $uri = "review/states";
        $response = $this->_post($uri,json_encode($model->jsonSerialize()));
        return $this->mapper->map(json_decode($response), new ReviewState());
    }

    /**
     * Get State Reviews of resource , API:"http://api.opencaribbean.org/api/v1/review/status/resource/:resourceId"
     * @param string $resourceId
     * @return StateReviewResource $data
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
    public function getState($resourceId){
        $uri = "review/states/resource/$resourceId";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new StateReviewResource());
;
    }

    /**
     * Get State Reviews of resource and user , API:"http://api.opencaribbean.org/api/v1/review/states/resource/:resourceId/user/:userId"
     * @param string $resourceId
     * @param string $userId
     * @return ReviewState $data
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
    public function getStateByUser($resourceId,$userId){
        $uri = "review/states/resource/$resourceId/user/$userId";
        $response = $this->_get($uri);
        return $this->mapper->map(json_decode($response), new ReviewState());
    }

    /**
     * Delete a State Reviews , API:"http://api.opencaribbean.org/api/v1/review/states/:id"
     * @param integer $id
     * @return string $location
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
    public function deleteState($id) {

        $uri = "review/states/$id";
        $response = $this->_delete($uri);
        return $response;
    }



}