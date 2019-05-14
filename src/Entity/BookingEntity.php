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
class BookingEntity implements \JsonSerializable
{
    /**
     * @var string
     */
    private $bookableId;
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
    private $iduser;
    /**
     * @var string
     */
    private $status;

    /**
     * BookingEntity constructor.
     * @param string $bookableId
     * @param string $dateend
     * @param string $datestart
     * @param string $idapp
     * @param string $idresource
     * @param string $iduser
     * @param string $status
     */
    public function __construct($bookableId, $dateend, $datestart, $idapp, $idresource, $iduser, $status)
    {
        $this->bookableId = $bookableId;
        $this->dateend = $dateend;
        $this->datestart = $datestart;
        $this->idapp = $idapp;
        $this->idresource = $idresource;
        $this->iduser = $iduser;
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getBookableId()
    {
        return $this->bookableId;
    }

    /**
     * @param string $bookableId
     */
    public function setBookableId($bookableId)
    {
        $this->bookableId = $bookableId;
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
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
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
           "bookableId"=>$this->bookableId,
           "dateend"=>$this->dateend,
           "datestart"=>$this->datestart,
           "idapp"=>$this->idapp,
           "idresource"=>$this->idresource,
           "iduser"=>$this->iduser,
           "status"=>$this->status,
       );
    }
}