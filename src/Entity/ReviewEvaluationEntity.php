<?php
/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 12/05/19
 * Time: 15:32
 */

namespace Awaraks\Entity;


/**
 * Class ReviewStateEntity
 * @package Awaraks\Entity
 */
class ReviewEvaluationEntity implements \JsonSerializable
{
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $idApp;
    /**
     * @var string
     */
    private $idResource;
    /**
     * @var string
     */
    private $idUser;
    /**
     * @var int
     */
    private $value;

    /**
     * ReviewStateEntity constructor.
     * @param string $date
     * @param string $idApp
     * @param string $idResource
     * @param string $idUser
     * @param int $value
     */
    public function __construct($date, $idApp, $idResource, $idUser, $value)
    {
        $this->date = $date;
        $this->idApp = $idApp;
        $this->idResource = $idResource;
        $this->idUser = $idUser;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getIdApp()
    {
        return $this->idApp;
    }

    /**
     * @param string $idApp
     */
    public function setIdApp($idApp)
    {
        $this->idApp = $idApp;
    }

    /**
     * @return string
     */
    public function getIdResource()
    {
        return $this->idResource;
    }

    /**
     * @param string $idResource
     */
    public function setIdResource($idResource)
    {
        $this->idResource = $idResource;
    }

    /**
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param string $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
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
            "date" => $this->date,
            "idApp" => $this->idApp,
            "idResource" => $this->idResource,
            "idUser" => $this->idUser,
            "value" => $this->value,
        );
    }
}