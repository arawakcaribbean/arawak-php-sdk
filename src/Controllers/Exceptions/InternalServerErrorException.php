<?php
namespace Awaraks\Controllers\Exceptions;

/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 9/05/19
 * Time: 12:31
 */
class InternalServerErrorException extends \Exception
{
    public function __construct($msg)
    {
        parent::__construct("Internal Server Error: ". $msg, 500, null);
    }
}