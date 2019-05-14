<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 8/05/19
 * Time: 16:06
 */

namespace Awaraks\Mapper;


/**
 * Class Country
 * @package Awaraks\Mapper
 */
class Country{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $capital;

    /**
     * @var string[]
     */
    public $timezones;

    /**
     * @var float
     */
    public $latitude;

    /**
     * @var float
     */
    public $longitude;
}