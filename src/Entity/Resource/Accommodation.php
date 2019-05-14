<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 13/05/19
 * Time: 20:08
 */

namespace Awaraks\Entity\Resource;


/**
 * Class Accommodation
 * @package Awaraks\Entity\Resource
 */
class Accommodation implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string[]
     */
    private $type;
    /**
     * @var string
     */
    private $description;
    /**
     * @var integer
     */
   private $numOfRooms;

    /**
     * Accommodation constructor.
     * @param string $name
     * @param \string[] $type
     * @param string $description
     * @param int $numOfRooms
     */
    public function __construct($name, array $type, $description, $numOfRooms)
    {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->numOfRooms = $numOfRooms;
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
     * @return \string[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \string[] $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getNumOfRooms()
    {
        return $this->numOfRooms;
    }

    /**
     * @param int $numOfRooms
     */
    public function setNumOfRooms($numOfRooms)
    {
        $this->numOfRooms = $numOfRooms;
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
            "name"=>$this->name,
            "description"=>$this->description,
            "type"=>$this->type,
            "numOfRooms"=>$this->numOfRooms,
        );
    }
}