<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 12/05/19
 * Time: 12:50
 */

namespace Awaraks\Entity;


/**
 * Class MailTemplateEntity
 * @package Awaraks\Entity
 */
class MailTemplateEntity implements \JsonSerializable
{
    /**
     * @var string
     */
    private $url;
    /**
     * @var string[]
     */
    private $vars;

    /**
     * MailTemplateEntity constructor.
     * @param \stdClass $vars
     */
    public function __construct( $vars)
    {
        $this->url = "http://upload.opencaribbean.org/download/737a520e-4f9f-4a28-b17b-f315f1d7fb77.tpl";
        $this->vars = $vars;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return \string[]
     */
    public function getVars()
    {
        return $this->vars;
    }

    /**
     * @param \string[] $vars
     */
    public function setVars($vars)
    {
        $this->vars = $vars;
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
            'url'=>"http://upload.opencaribbean.org/download/737a520e-4f9f-4a28-b17b-f315f1d7fb77.tpl",
            'vars'=>$this->vars,
        );
    }
}