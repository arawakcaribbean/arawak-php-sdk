<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 11/05/19
 * Time: 14:57
 */

namespace Awaraks\Entity;


/**
 * Class ClaimEntity
 * @package Awaraks\Entity
 */
class ClaimEntity implements \JsonSerializable
{

    /**
     * @var string
     */
    private $idApp;
    /**
     * @var string
     */
    private $idCurrentOwner;
    /**
     * @var string
     */
    private $idResource;
    /**
     * @var string
     */
    private $idUserClaimer;

    /**
     * ClaimEntity constructor.
     * @param string $idApp
     * @param string $idCurrentOwner
     * @param string $idResource
     * @param string $idUserClaimer
     */
    public function __construct($idApp, $idCurrentOwner, $idResource, $idUserClaimer)
    {
        $this->idApp = $idApp;
        $this->idCurrentOwner = $idCurrentOwner;
        $this->idResource = $idResource;
        $this->idUserClaimer = $idUserClaimer;
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
    public function getIdCurrentOwner()
    {
        return $this->idCurrentOwner;
    }

    /**
     * @param string $idCurrentOwner
     */
    public function setIdCurrentOwner($idCurrentOwner)
    {
        $this->idCurrentOwner = $idCurrentOwner;
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
    public function getIdUserClaimer()
    {
        return $this->idUserClaimer;
    }

    /**
     * @param string $idUserClaimer
     */
    public function setIdUserClaimer($idUserClaimer)
    {
        $this->idUserClaimer = $idUserClaimer;
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
            'idApp'=>$this->getIdApp(),
            'idCurrentOwner'=>$this->getIdCurrentOwner(),
            'idResource'=>$this->getIdResource(),
            'idUserClaimer'=>$this->getIdUserClaimer(),
        );
    }
}