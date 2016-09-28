<?php
/**
 * Created by IntelliJ IDEA.
 * User: munzli
 * Date: 9/20/16
 * Time: 2:52 PM
 */

namespace Ibrows\PostBarcodeBundle\Entity;

use Ibrows\PostBarcodeBundle\Model\AddressInterface;

/**
 * Address Entity
 */
class Address implements AddressInterface
{
    private $lastname;
    private $firstname;
    private $company;
    private $zipcode;
    private $primarystreet;
    private $secondarystreet;
    private $city;
    private $country;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastname;
    }

    public function setLastName($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
       return $this->firstname . ' ' . $this->lastname;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipcode;
    }

    public function setZipCode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getPrimaryStreet()
    {
        return $this->primarystreet;
    }

    public function setPrimaryStreet($primarystreet)
    {
        $this->primarystreet = $primarystreet;
    }

    /**
     * @return string
     */
    public function getSecondaryStreet()
    {
        return $this->secondarystreet;
    }

    public function setSecondaryStreet($secondarystreet)
    {
        $this->secondarystreet = $secondarystreet;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}