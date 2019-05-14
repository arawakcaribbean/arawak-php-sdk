<?php
namespace Awaraks\Entity\Resource;

/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 13/05/19
 * Time: 19:50
 */
class Resource implements \JsonSerializable
{
    /**
     * @var boolean
     */
    private $active;
    /**
     * @var boolean
     */
    private $bookeable;
    /**
     * @var \stdClass
     */
    private $data;
    /**
     * @var string
     */
    private $name;

    /**
     * Resource constructor.
     * @param bool $active
     * @param bool $bookeable
     * @param stdClass $data
     * @param string $name name of type reosurce Example: Attraction
     */
    public function __construct($active, $bookeable, stdClass $data, $name)
    {
        $this->active = $active;
        $this->bookeable = $bookeable;
        $this->data = $data;
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return bool
     */
    public function isBookeable()
    {
        return $this->bookeable;
    }

    /**
     * @param bool $bookeable
     */
    public function setBookeable($bookeable)
    {
        $this->bookeable = $bookeable;
    }

    /**
     * @return stdClass
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param stdClass $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
            "active" => $this->active,
            "bookeable" => $this->bookeable,
            "data" => json_decode($this->data),
            "name" => $this->name
        );
    }
}