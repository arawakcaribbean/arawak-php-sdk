<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 12/05/19
 * Time: 15:12
 */

namespace Awaraks\Mapper;


class Mail
{
    /**
     * @var MailTemplateDetail
     */
    public $detail;
    /**
     * @var MailHead
     */
    public $head;

    /**
     * @var string[]
     */
    public $headers;
}

class MailTemplateDetail
{
    /**
     * @var string[]
     */
    public $attachments;
    /**
     * @var MailTemplate
     */
    public $template;
    /**
     * @var string
     */
    public $subject;
}

class MailTemplate
{
    /**
     * @var string
     */
    public $url;
    /**
     * @var string[]
     */
    public $vars;
    
}


class MailHead{

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