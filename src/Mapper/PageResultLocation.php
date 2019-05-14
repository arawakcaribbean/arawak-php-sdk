<?php
namespace Awaraks\Mapper;
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 6/05/19
 * Time: 22:15
 */
/**
 * Class PageResultCountry
 * @package Awaraks\Mapper
 */
class PageResultLocation{



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
     * @var Location[]
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



