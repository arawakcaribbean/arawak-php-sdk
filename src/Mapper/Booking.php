<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 13/05/19
 * Time: 23:51
 */

namespace Awaraks\Mapper;


/**
 * Class Booking
 * @package Awaraks\Mapper
 */
class Booking
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
    public $iduser;
    /**
     * @var string
     */
    public $idresource;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $datestart;
    /**
     * @var string
     */
    public $dateend;
    /**
     * @var string
     */
    public $createdAt;
    /**
     * @var string
     */
    public $updatedAt;
    /**
     * @var Bookable
     */
    public $bookable;
}

