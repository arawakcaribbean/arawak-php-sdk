<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 8/05/19
 * Time: 23:18
 */

namespace Awaraks\Entity;


/**
 * Class DataLocationEntity
 * @package Awaraks\Entity
 */
class DataLocationEntity implements \JsonSerializable
{
    /**
     * @var float
     */
    private $lat;
    /**
     * @var float
     */
    private $lon;

    /**
     * DataLocation constructor.
     * @param float $lat
     * @param float $lon
     */
    public function __construct($lat, $lon)
    {
        $this->lat = $lat;
        $this->lon = $lon;
    }

    /**
     * @return float
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * @param float $lat
     */
    public function setLat($lat)
    {
        $this->lat = $lat;
    }

    /**
     * @return float
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * @param float $lon
     */
    public function setLon($lon)
    {
        $this->lon = $lon;
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
                'lat'=>$this->getLat(),
                'lon'=>$this->getLon()
            );
    }
}