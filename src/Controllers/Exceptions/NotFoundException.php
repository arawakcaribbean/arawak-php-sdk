<?php
namespace Awaraks\Controllers\Exceptions;

/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 9/05/19
 * Time: 12:31
 */
class NotFoundException extends \Exception
{
    public function __construct($msg)
    {
        parent::__construct("Not Found: ". $msg, 404, null);
    }
}