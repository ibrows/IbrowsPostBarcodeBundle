<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ServiceGroup
{

  /**
   * 
   * @var int $ServiceGroupID
   * @access public
   */
  public $ServiceGroupID = null;

  /**
   * 
   * @var DescriptionType $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @param int $ServiceGroupID
   * @param DescriptionType $Description
   * @access public
   */
  public function __construct($ServiceGroupID = null, $Description = null)
  {
    $this->ServiceGroupID = $ServiceGroupID;
    $this->Description = $Description;
  }

  /**
   * 
   * @return int
   */
  public function getServiceGroupID()
  {
    return $this->ServiceGroupID;
  }

  /**
   * 
   * @param int $ServiceGroupID
   */
  public function setServiceGroupID($ServiceGroupID)
  {
    $this->ServiceGroupID = $ServiceGroupID;
  }

  /**
   * 
   * @return DescriptionType
   */
  public function getDescription()
  {
    return $this->Description;
  }

  /**
   * 
   * @param DescriptionType $Description
   */
  public function setDescription($Description)
  {
    $this->Description = $Description;
  }

}
