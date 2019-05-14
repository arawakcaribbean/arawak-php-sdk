<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 13/05/19
 * Time: 20:08
 */

namespace Awaraks\Entity\Resource;


/**
 * Class Attraction
 * @package Awaraks\Entity\Resource
 */
class Attraction extends \stdClass implements \JsonSerializable
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
     * @var boolean
     */
    private $natural;
    /**
     * @var string
     */
    private $activities;

    /**
     * Attraction constructor.
     * @param string $name
     * @param \string[] $type
     * @param string $description
     * @param bool $natural
     * @param string $activities
     */
    public function __construct($name, array $type, $description, $natural, $activities)
    {
        $this->name = $name;
        $this->type = $type;
        $this->description = $description;
        $this->natural = $natural;
        $this->activities = $activities;
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
     * @return bool
     */
    public function isNatural()
    {
        return $this->natural;
    }

    /**
     * @param bool $natural
     */
    public function setNatural($natural)
    {
        $this->natural = $natural;
    }

    /**
     * @return string
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * @param string $activities
     */
    public function setActivities($activities)
    {
        $this->activities = $activities;
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
            "natural"=>$this->natural,
            "activities"=>$this->activities,
        );
    }
}