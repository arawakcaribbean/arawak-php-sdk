<?php
namespace Awaraks\Mapper\Resource;
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 6/05/19
 * Time: 22:15
 */
/**
 * Class PageResultCountry
 * @package Awaraks\Mapper
 */
class PageResultEntity{



    /**
     * @var integer
     */
    public $size;
    /**
     * @var integer
     */
    public $page;
    /**
     * @var integer
     */
    public $totalElements;
    /**
     * @var integer
     */
    public $countPages;
    /**
     * @var boolean
     */
    public $hasNext;
    /**
     * @var boolean
     */
    public $hasPrevious;
    /**
     * @var \stdClass[]
     */
    public $content;
    /**
     * @var string
     */
    public $first;
    /**
     * @var string
     */
    public $last;
}



