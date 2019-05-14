<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 11/05/19
 * Time: 15:03
 */

namespace Awaraks\Mapper;


/**
 * Class Claim
 * @package Awaraks\Mapper
 */
class Claim
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $idApp;
    /**
     * @var string
     */
    public $idCurrentOwner;
    /**
     * @var string
     */
    public $idResource;
    /**
     * @var string
     */
    public $idUserClaimer;


    /**
     * @var string
     */
    public $claimedAt;
     /**
     * @var string
     */
    public $claimStatus;

}