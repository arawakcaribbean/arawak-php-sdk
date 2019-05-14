<?php
namespace Awaraks\Controllers\Exceptions;

/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 9/05/19
 * Time: 12:31
 */
class ArawaksException extends \Exception
{
    public function __construct($code,$msg)
    {
        parent::__construct("Error in the Arawaks API: ". $msg, $code, null);
    }
}