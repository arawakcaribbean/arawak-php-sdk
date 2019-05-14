<?php
/**
 * Created by PhpStorm.
 * User: Bran Stark
 * Date: 11/05/19
 * Time: 16:33
 */

namespace Awaraks\Entity;


/**
 * Class FormClaimEntity
 * @package Awaraks\Entity
 */
class FormClaimEntity implements \JsonSerializable
{
    /**
     * @var string
     */
    private $addressClaimer;
    /**
     * @var string
     */
    private $claimedAt;
    /**
     * @var string
     */
    private $emailClaimer;
    /**
     * @var string
     */
    private $fullNameClaimer;
    /**
     * @var string
     */
    private $idClaimer;
    /**
     * @var string
     */
    private $idUserClaimer;
    /**
     * @var string
     */
    private $phoneClaimer;
    /**
     * @var string
     */
    private $imageEvidence;
    /**
     * @var string
     */
    private $reason;

    /**
     * FormClaimEntity constructor.
     * @param $addressClaimer
     * @param $claimedAt
     * @param $emailClaimer
     * @param $fullNameClaimer
     * @param $idClaimer
     * @param $idUserClaimer
     * @param $phoneClaimer
     * @param $imageEvidence
     * @param $reason
     */
    public function __construct($addressClaimer, $claimedAt, $emailClaimer, $fullNameClaimer, $idClaimer, $idUserClaimer, $phoneClaimer, $imageEvidence, $reason)
    {
        $this->addressClaimer = $addressClaimer;
        $this->claimedAt = $claimedAt;
        $this->emailClaimer = $emailClaimer;
        $this->fullNameClaimer = $fullNameClaimer;
        $this->idClaimer = $idClaimer;
        $this->idUserClaimer = $idUserClaimer;
        $this->phoneClaimer = $phoneClaimer;
        $this->imageEvidence = $imageEvidence;
        $this->reason = $reason;
    }

    /**
     * @return mixed
     */
    public function getAddressClaimer()
    {
        return $this->addressClaimer;
    }

    /**
     * @param mixed $addressClaimer
     */
    public function setAddressClaimer($addressClaimer)
    {
        $this->addressClaimer = $addressClaimer;
    }

    /**
     * @return mixed
     */
    public function getClaimedAt()
    {
        return $this->claimedAt;
    }

    /**
     * @param mixed $claimedAt
     */
    public function setClaimedAt($claimedAt)
    {
        $this->claimedAt = $claimedAt;
    }

    /**
     * @return mixed
     */
    public function getEmailClaimer()
    {
        return $this->emailClaimer;
    }

    /**
     * @param mixed $emailClaimer
     */
    public function setEmailClaimer($emailClaimer)
    {
        $this->emailClaimer = $emailClaimer;
    }

    /**
     * @return mixed
     */
    public function getFullNameClaimer()
    {
        return $this->fullNameClaimer;
    }

    /**
     * @param mixed $fullNameClaimer
     */
    public function setFullNameClaimer($fullNameClaimer)
    {
        $this->fullNameClaimer = $fullNameClaimer;
    }

    /**
     * @return mixed
     */
    public function getIdClaimer()
    {
        return $this->idClaimer;
    }

    /**
     * @param mixed $idClaimer
     */
    public function setIdClaimer($idClaimer)
    {
        $this->idClaimer = $idClaimer;
    }

    /**
     * @return mixed
     */
    public function getIdUserClaimer()
    {
        return $this->idUserClaimer;
    }

    /**
     * @param mixed $idUserClaimer
     */
    public function setIdUserClaimer($idUserClaimer)
    {
        $this->idUserClaimer = $idUserClaimer;
    }

    /**
     * @return mixed
     */
    public function getPhoneClaimer()
    {
        return $this->phoneClaimer;
    }

    /**
     * @param mixed $phoneClaimer
     */
    public function setPhoneClaimer($phoneClaimer)
    {
        $this->phoneClaimer = $phoneClaimer;
    }

    /**
     * @return mixed
     */
    public function getImageEvidence()
    {
        return $this->imageEvidence;
    }

    /**
     * @param mixed $imageEvidence
     */
    public function setImageEvidence($imageEvidence)
    {
        $this->imageEvidence = $imageEvidence;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param mixed $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
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
            "addressClaimer" => $this->getAddressClaimer(),
            "claimedAt" => $this->getAddressClaimer(),
            "emailClaimer" => $this->getEmailClaimer(),
            "fullNameClaimer" => $this->getFullNameClaimer(),
            "idClaimer" => $this->getIdClaimer(),
            "idUserClaimer" => $this->getIdUserClaimer(),
            "imageEvidence" => $this->getImageEvidence(),
            "phoneClaimer" => $this->getPhoneClaimer(),
            "reason" => $this->getReason()
        );
    }
}