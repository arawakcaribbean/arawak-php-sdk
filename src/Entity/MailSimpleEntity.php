<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 12/05/19
 * Time: 11:40
 */

namespace Awaraks\Entity;


/**
 * Class MailSimpleEntity
 * @package Awaraks\Entity
 */
/**
 * Class MailSimpleEntity
 * @package Awaraks\Entity
 */
class MailSimpleEntity implements \JsonSerializable
{
    /**
     * @var MailSimpleDetailEntity
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
     * MailSimpleEntity constructor.
     * @param MailSimpleDetailEntity $detail
     * @param MailHeadEntity $head
     * @param \string[] $headers
     */
    public function __construct(MailSimpleDetailEntity $detail, MailHeadEntity $head, $headers)
    {
        $this->detail = $detail;
        $this->head = $head;
        $this->headers = $headers;
    }

    /**
     * @return MailSimpleDetailEntity
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param MailSimpleDetailEntity $detail
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
            "headers"=>json_encode([])
        );
    }
}


