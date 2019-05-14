<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 12/05/19
 * Time: 12:53
 */

namespace Awaraks\Entity;


class MailEntity implements \JsonSerializable
{
    /**
     * @var MailTemplateDetailEntity
     */
    private $detail;
    /**
     * @var MailHeadEntity
     */
    private $head;

    /**
     * @var string[]
     */
    private $headers;

    /**
     * MailEntity constructor.
     * @param MailTemplateDetailEntity $detail
     * @param MailHeadEntity $head
     * @param \string[] $headers
     */
    public function __construct(MailTemplateDetailEntity $detail, MailHeadEntity $head, array $headers)
    {
        $this->detail = $detail;
        $this->head = $head;
        $this->headers = $headers;
    }

    /**
     * @return MailTemplateDetailEntity
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param MailTemplateDetailEntity $detail
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    }

    /**
     * @return MailHeadEntity
     */
    public function getHead()
    {
        return $this->head;
    }

    /**
     * @param MailHeadEntity $head
     */
    public function setHead($head)
    {
        $this->head = $head;
    }

    /**
     * @return \string[]
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * @param \string[] $headers
     */
    public function setHeaders($headers)
    {
        $this->headers = $headers;
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
            "detail"=>$this->detail->jsonSerialize(),
            "head"=>$this->head->jsonSerialize(),
            "headers"=>$this->headers,
        );
    }
}