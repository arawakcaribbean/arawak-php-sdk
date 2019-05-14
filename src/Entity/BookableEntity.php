<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 14/05/19
 * Time: 0:01
 */

namespace Awaraks\Entity;


/**
 * Class BookingEntity
 * @package Awaraks\Entity
 */
class BookableEntity implements \JsonSerializable
{

    /**
     * @var string
     */
    private $dateend;
    /**
     * @var string
     */
    private $datestart;
    /**
     * @var string
     */
    private $idapp;
    /**
     * @var string
     */
    private $idresource;
    /**
     * @var string
     */
    private $idrate;
    /**
     * @var string
     */
    private $iduser;
    /**
     * @var boolean
     */
    private $isenable;

    /**
     * BookableEntity constructor.
     * @param string $dateend
     * @param string $datestart
     * @param string $idapp
     * @param string $idresource
     * @param string $idrate
     * @param string $iduser
     * @param bool $isenable
     */
    public function __construct($dateend, $datestart, $idapp, $idresource, $idrate, $iduser, $isenable)
    {
        $this->dateend = $dateend;
        $this->datestart = $datestart;
        $this->idapp = $idapp;
        $this->idresource = $idresource;
        $this->idrate = $idrate;
        $this->iduser = $iduser;
        $this->isenable = $isenable;
    }

    /**
     * @return string
     */
    public function getDateend()
    {
        return $this->dateend;
    }

    /**
     * @param string $dateend
     */
    public function setDateend($dateend)
    {
        $this->dateend = $dateend;
    }

    /**
     * @return string
     */
    public function getDatestart()
    {
        return $this->datestart;
    }

    /**
     * @param string $datestart
     */
    public function setDatestart($datestart)
    {
        $this->datestart = $datestart;
    }

    /**
     * @return string
     */
    public function getIdapp()
    {
        return $this->idapp;
    }

    /**
     * @param string $idapp
     */
    public function setIdapp($idapp)
    {
        $this->idapp = $idapp;
    }

    /**
     * @return string
     */
    public function getIdresource()
    {
        return $this->idresource;
    }

    /**
     * @param string $idresource
     */
    public function setIdresource($idresource)
    {
        $this->idresource = $idresource;
    }

    /**
     * @return string
     */
    public function getIdrate()
    {
        return $this->idrate;
    }

    /**
     * @param string $idrate
     */
    public function setIdrate($idrate)
    {
        $this->idrate = $idrate;
    }

    /**
     * @return string
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * @param string $iduser
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;
    }

    /**
     * @return bool
     */
    public function isIsenable()
    {
        return $this->isenable;
    }

    /**
     * @param bool $isenable
     */
    public function setIsenable($isenable)
    {
        $this->isenable = $isenable;
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
           "dateend"=>$this->dateend,
           "datestart"=>$this->datestart,
           "idapp"=>$this->idapp,
           "idresource"=>$this->idresource,
           "iduser"=>$this->iduser,
           "isenable"=>$this->isenable,
           "idrate"=>$this->idrate,
       );
    }
}