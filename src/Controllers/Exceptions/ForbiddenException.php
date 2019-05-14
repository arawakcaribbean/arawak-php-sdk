<?php
namespace Awaraks\Controllers\Exceptions;

/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 9/05/19
 * Time: 12:31
 */
class ForbiddenException extends \Exception
{
    public function __construct($msg)
    {
        parent::__construct("Forbidden: ". $msg, 403, null);
    }
}