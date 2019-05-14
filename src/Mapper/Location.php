<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 8/05/19
 * Time: 22:34
 */

namespace Awaraks\Mapper;


/**
 * Class Location
 * @package Awaraks\Mapper
 */
class Location
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $city;
    /**
     * @var string
     */
    public $community;
    /**
     * @var Country
     */
    public $country;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $fax;
    /**
     * @var DataLocation
     */
    public $location;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string[]
     */
    public $phoneNumbers;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $resourceId ;
    /**
     * @var string
     */
    public $state ;
    /**
     * @var string
     */
    public $street ;
    /**
     * @var string[]
     */
    public $timeZone ;
    /**
     * @var string
     */
    public $tpdco ;
}

/**
 * Class DataLocation
 * @package Awaraks\Mapper
 */
class DataLocation{
    /**
     * @var float
     */
    public $lat;
    /**
     * @var float
     */
    public $lon;
}
