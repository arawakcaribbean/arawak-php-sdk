<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 12/05/19
 * Time: 16:32
 */

namespace Awaraks\Mapper;


/**
 * Class StateReviewResource
 * @package Awaraks\Mapper
 */
class StateReviewResource
{
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var StateReviewResourceStatus[]
     */
    public $statesValues;
}

/**
 * Class StateReviewResourceStatus
 * @package Awaraks\Mapper
 */
class StateReviewResourceStatus
{
    /**
     * @var integer
     */
    public $quantity;
    /**
     * @var string
     */
    public $state;
}