<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 12/05/19
 * Time: 12:48
 */

namespace Awaraks\Entity;


class MailTemplateDetailEntity implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $attachments;
    /**
     * @var MailTemplateEntity
     */
    private $template;
    /**
     * @var string
     */
    private $subject;

    /**
     * MailTemplateDetailEntity constructor.
     * @param \string[] $attachments
     * @param MailTemplateEntity $template
     * @param string $subject
     */
    public function __construct(array $attachments, MailTemplateEntity $template, $subject)
    {
        $this->attachments = $attachments;
        $this->template = $template;
        $this->subject = $subject;
    }

    /**
     * @return \string[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * @param \string[] $attachments
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    /**
     * @return MailTemplateEntity
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * @param MailTemplateEntity $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }




    function jsonSerialize()
    {
        return array(
            "attachments"=>$this->attachments,
            "template"=>$this->template,
            "subject"=>$this->subject,
        );
    }


}