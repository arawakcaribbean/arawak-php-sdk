<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 12/05/19
 * Time: 11:59
 */

namespace Awaraks\Mapper;


class MailSimple
{
    /**
     * @var MailSimpleDetail
     */
    public $detail;
    /**
     * @var MailSimpleHead
     */
    public $head;

    /**
     * @var string[]
     */
    public $headers;
}

class MailSimpleDetail{

    /**
     * @var string[]
     */
    public $attachments;
    /**
     * @var string
     */
    public $body;
    /**
     * @var string
     */
    public $subject;
}


class MailSimpleHead{

    /**
     * @var string[]
     */
    public $bcc;
    /**
     * @var string[]
     */
    public $cc;
    /**
     * @var string
     */
    public $from;
    /**
     * @var string[]
     */
    public $to;
}