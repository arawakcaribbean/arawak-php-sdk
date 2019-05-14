<?php
namespace Awaraks\Entity;
use Awaraks\Mapper\DataLocation;

/**
 * Created by PhpStorm.
 * User: yasiel
 * Date: 8/05/19
 * Time: 23:08
 */
class LocationEntity implements \JsonSerializable
{
    /**
     * @var string
     */
    private $appId;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $community;
    /**
     * @var CountryEntity
     */
    private $country;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $fax;
    /**
     * @var DataLocationEntity
     */
    private $location;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string[]
     */
    private $phoneNumbers;
    /**
     * @var string
     */
    private $region;
    /**
     * @var string
     */
    private $resourceId;
    /**
     * @var string
     */
    private $state;
    /**
     * @var string
     */
    private $street;
    /**
     * @var string[]
     */
    private $timeZone;
    /**
     * @var string
     */
    private $tpdco;

    /**
     * LocationEntity constructor.
     * @param string $appId
     * @param string $city
     * @param string $community
     * @param CountryEntity $country
     * @param string $email
     * @param string $fax
     * @param DataLocationEntity $location
     * @param string $name
     * @param string[] $phoneNumbers
     * @param string $region
     * @param string $resourceId
     * @param string $state
     * @param string $street
     * @param string[] $timeZone
     * @param string $tpdco
     */
    public function __construct($appId, $city, $community, CountryEntity $country, $email, $fax, DataLocationEntity $location, $name, array $phoneNumbers, $region, $resourceId, $state, $street, array $timeZone, $tpdco)
    {

        $this->appId = $appId;
        $this->city = $city;
        $this->community = $community;
        $this->country = $country;
        $this->email = $email;
        $this->fax = $fax;
        $this->location = $location;
        $this->name = $name;
        $this->phoneNumbers = $phoneNumbers;
        $this->region = $region;
        $this->resourceId = $resourceId;
        $this->state = $state;
        $this->street = $street;
        $this->timeZone = $timeZone;
        $this->tpdco = $tpdco;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param string $appId
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCommunity()
    {
        return $this->community;
    }

    /**
     * @param string $community
     */
    public function setCommunity($community)
    {
        $this->community = $community;
    }

    /**
     * @return CountryEntity
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param CountryEntity $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return DataLocationEntity
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param DataLocation $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
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
     * @return string[]
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    /**
     * @param string[] $phoneNumbers
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
    }

    /**
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param string $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return string
     */
    public function getResourceId()
    {
        return $this->resourceId;
    }

    /**
     * @param string $resourceId
     */
    public function setResourceId($resourceId)
    {
        $this->resourceId = $resourceId;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string[]
     */
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @param string[] $timeZone
     */
    public function setTimeZone($timeZone)
    {
        $this->timeZone = $timeZone;
    }

    /**
     * @return string
     */
    public function getTpdco()
    {
        return $this->tpdco;
    }

    /**
     * @param string $tpdco
     */
    public function setTpdco($tpdco)
    {
        $this->tpdco = $tpdco;
    }






    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize() {
        return array(
            'appId' => $this->getAppId(),
            'city' => $this->getCity(),
            'community' => $this->getCommunity(),
            'country' => $this->getCountry()->jsonSerialize(),
            'email' => $this->getEmail(),
            'fax' => $this->getFax(),
            'location' => $this->getLocation()->jsonSerialize(),
            'name' => $this->getName(),
            'phoneNumbers' => $this->getPhoneNumbers(),
            'region' => $this->getRegion(),
            'resourceId' => $this->getResourceId(),
            'state' => $this->getState(),
            'street' => $this->getStreet(),
            'timeZone' => $this->getTimeZone(),
            'tpdco' => $this->getTpdco(),

        );
    }
}

