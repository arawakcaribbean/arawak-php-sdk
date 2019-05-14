<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 12/05/19
 * Time: 12:06
 */

namespace Awaraks\Entity;



/**
 * Class MailHeadEntity
 * @package Awaraks\Entity
 */
class MailHeadEntity implements \JsonSerializable {
    /**
     * @var string[]
     */
    private $bcc;
    /**
     * @var string[]
     */
    private $cc;
    /**
     * @var string
     */
    private $from;
    /**
     * @var string[]
     */
    private $to;

    /**
     * MailHeadEntity constructor.
     * @param \string[] $bcc
     * @param \string[] $cc
     * @param string $from
     * @param \string[] $to
     */
    public function __construct(array $bcc, array $cc, $from, array $to)
    {
        $this->bcc = $bcc;
        $this->cc = $cc;
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @return \string[]
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * @param \string[] $bcc
     */
    public function setBcc($bcc)
    {
        $this->bcc = $bcc;
    }

    /**
     * @return \string[]
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * @param \string[] $cc
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param string $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return \string[]
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param \string[] $to
     */
    public function setTo($to)
    {
        $this->to = $to;
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
            "bcc"=>$this->bcc,
            "cc"=>$this->cc,
            "from"=>$this->from,
            "to"=>$this->to,
        );

    }
}