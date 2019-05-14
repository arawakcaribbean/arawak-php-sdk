<?php
namespace Awaraks\Controllers\Exceptions;

/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 9/05/19
 * Time: 12:31
 */
class ServiceUnavailableException extends \Exception
{
    public function __construct($msg)
    {
        parent::__construct("Service Unavailable: ". $msg, 503, null);
    }
}