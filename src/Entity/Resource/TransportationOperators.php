<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 13/05/19
 * Time: 20:08
 */

namespace Awaraks\Entity\Resource;


/**
 * Class TransportationOperators
 * @package Awaraks\Entity\Resource
 */
class TransportationOperators implements \JsonSerializable
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
   private $numOfVehicles;

    /**
     * TransportationOperators constructor.
     * @param string $name
     * @param \string[] $type
     * @param string $description
     * @param int $numOfVehicles
     */
    public function __construct($name, array $type, $description, $numOfVehicles)
    {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->numOfVehicles = $numOfVehicles;
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
    public function getNumOfVehicles()
    {
        return $this->numOfVehicles;
    }

    /**
     * @param int $numOfVehicles
     */
    public function setNumOfVehicles($numOfVehicles)
    {
        $this->numOfVehicles = $numOfVehicles;
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
            "numOfVehicles"=>$this->numOfVehicles,
        );
    }
}