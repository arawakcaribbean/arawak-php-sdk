<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 13/05/19
 * Time: 23:53
 */

namespace Awaraks\Mapper;


/**
 * Class Bookable
 * @package Awaraks\Mapper
 */
class Bookable
{
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $idapp;
    /**
     * @var string
     */
    public $iduser;
    /**
     * @var string
     */
    public $idrate;
    /**
     * @var string
     */
    public $idresource;
    /**
     * @var string
     */
    public $idlocation;
    /**
     * @var boolean
     */
    public $isenabled;
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
}