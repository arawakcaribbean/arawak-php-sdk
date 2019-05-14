<?php
namespace Awaraks\Entity;

/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 8/05/19
 * Time: 15:25
 */
/**
 * Class CountryEntity
 * @package Awaraks\Entity
 */
class CountryEntity implements \JsonSerializable {

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $capital;

    /**
     * @var string[]
     */
    private $timezones;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * CountryEntity constructor.
     * @param $id
     * @param $name
     * @param string $code
     * @param string $capital
     * @param string[] $timezones
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($id, $name, $code, $capital, array $timezones, $latitude, $longitude)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->capital = $capital;
        $this->timezones = $timezones;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }



    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    /**
     * @return string[]
     */
    public function getTimezones()
    {
        return $this->timezones;
    }

    /**
     * @param string[] $timezones
     */
    public function setTimezones($timezones)
    {
        $this->timezones = $timezones;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
            'id'=>$this->getId(),
            'name'=>$this->getName(),
            'code' => $this->getCode(),
            'capital'=>$this->getCapital(),
            'timezones'=>$this->getTimezones(),
            'latitude'=>$this->getLatitude(),
            'longitude'=>$this->getLongitude(),
        );
    }
}