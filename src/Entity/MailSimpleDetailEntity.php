<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 12/05/19
 * Time: 12:05
 */

namespace Awaraks\Entity;


/**
 * Class MailSimpleDetailEntity
 * @package Awaraks\Entity
 */
class MailSimpleDetailEntity implements \JsonSerializable
{
    /**
     * @var string[]
     */
    private $attachments;
    /**
     * @var string
     */
    private $body;
    /**
     * @var string
     */
    private $subject;

    /**
     * MailSimpleDetailEntity constructor.
     * @param \string[] $attachments
     * @param string $body
     * @param string $subject
     */
    public function __construct(array $attachments, $body, $subject)
    {
        $this->attachments = $attachments;
        $this->body = $body;
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
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param string $body
     */
    public function setBody($body)
    {
        $this->body = $body;
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


    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return array(
            "attachments"=>$this->attachments,
            "body"=>$this->body,
            "subject"=>$this->subject,
        );
    }
}
