<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class SingleBarcodesCustomer
{

  /**
   * 
   * @var CustomerAddressLineType $Name1
   * @access public
   */
  public $Name1 = null;

  /**
   * 
   * @var CustomerAddressLineType $Name2
   * @access public
   */
  public $Name2 = null;

  /**
   * 
   * @var CustomerAddressLineType $Street
   * @access public
   */
  public $Street = null;

  /**
   * 
   * @var CustomerAddressLineType $POBox
   * @access public
   */
  public $POBox = null;

  /**
   * 
   * @var ZIP $ZIP
   * @access public
   */
  public $ZIP = null;

  /**
   * 
   * @var CustomerAddressLineType $City
   * @access public
   */
  public $City = null;

  /**
   * 
   * @var CountryType $Country
   * @access public
   */
  public $Country = null;

  /**
   * 
   * @var DomicilePostOffice $DomicilePostOffice
   * @access public
   */
  public $DomicilePostOffice = null;

  /**
   * 
   * @param CustomerAddressLineType $Name1
   * @param CustomerAddressLineType $Name2
   * @param CustomerAddressLineType $Street
   * @param CustomerAddressLineType $POBox
   * @param ZIP $ZIP
   * @param CustomerAddressLineType $City
   * @param CountryType $Country
   * @param DomicilePostOffice $DomicilePostOffice
   * @access public
   */
  public function __construct($Name1 = null, $Name2 = null, $Street = null, $POBox = null, $ZIP = null, $City = null, $Country = null, $DomicilePostOffice = null)
  {
    $this->Name1 = $Name1;
    $this->Name2 = $Name2;
    $this->Street = $Street;
    $this->POBox = $POBox;
    $this->ZIP = $ZIP;
    $this->City = $City;
    $this->Country = $Country;
    $this->DomicilePostOffice = $DomicilePostOffice;
  }

  /**
   * 
   * @return CustomerAddressLineType
   */
  public function getName1()
  {
    return $this->Name1;
  }

  /**
   * 
   * @param CustomerAddressLineType $Name1
   */
  public function setName1($Name1)
  {
    $this->Name1 = $Name1;
  }

  /**
   * 
   * @return CustomerAddressLineType
   */
  public function getName2()
  {
    return $this->Name2;
  }

  /**
   * 
   * @param CustomerAddressLineType $Name2
   */
  public function setName2($Name2)
  {
    $this->Name2 = $Name2;
  }

  /**
   * 
   * @return CustomerAddressLineType
   */
  public function getStreet()
  {
    return $this->Street;
  }

  /**
   * 
   * @param CustomerAddressLineType $Street
   */
  public function setStreet($Street)
  {
    $this->Street = $Street;
  }

  /**
   * 
   * @return CustomerAddressLineType
   */
  public function getPOBox()
  {
    return $this->POBox;
  }

  /**
   * 
   * @param CustomerAddressLineType $POBox
   */
  public function setPOBox($POBox)
  {
    $this->POBox = $POBox;
  }

  /**
   * 
   * @return ZIP
   */
  public function getZIP()
  {
    return $this->ZIP;
  }

  /**
   * 
   * @param ZIP $ZIP
   */
  public function setZIP($ZIP)
  {
    $this->ZIP = $ZIP;
  }

  /**
   * 
   * @return CustomerAddressLineType
   */
  public function getCity()
  {
    return $this->City;
  }

  /**
   * 
   * @param CustomerAddressLineType $City
   */
  public function setCity($City)
  {
    $this->City = $City;
  }

  /**
   * 
   * @return CountryType
   */
  public function getCountry()
  {
    return $this->Country;
  }

  /**
   * 
   * @param CountryType $Country
   */
  public function setCountry($Country)
  {
    $this->Country = $Country;
  }

  /**
   * 
   * @return DomicilePostOffice
   */
  public function getDomicilePostOffice()
  {
    return $this->DomicilePostOffice;
  }

  /**
   * 
   * @param DomicilePostOffice $DomicilePostOffice
   */
  public function setDomicilePostOffice($DomicilePostOffice)
  {
    $this->DomicilePostOffice = $DomicilePostOffice;
  }

}
