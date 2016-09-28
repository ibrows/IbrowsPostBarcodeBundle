<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadAllowedServicesByFrankingLicenseResponse
{

  /**
   * 
   * @var ReadAllowedServicesServiceGroups $ServiceGroups
   * @access public
   */
  public $ServiceGroups = null;

  /**
   * 
   * @var ErrorsType $Errors
   * @access public
   */
  public $Errors = null;

  /**
   * 
   * @param ReadAllowedServicesServiceGroups $ServiceGroups
   * @param ErrorsType $Errors
   * @access public
   */
  public function __construct($ServiceGroups = null, $Errors = null)
  {
    $this->ServiceGroups = $ServiceGroups;
    $this->Errors = $Errors;
  }

  /**
   * 
   * @return ReadAllowedServicesServiceGroups
   */
  public function getServiceGroups()
  {
    return $this->ServiceGroups;
  }

  /**
   * 
   * @param ReadAllowedServicesServiceGroups $ServiceGroups
   */
  public function setServiceGroups($ServiceGroups)
  {
    $this->ServiceGroups = $ServiceGroups;
  }

  /**
   * 
   * @return ErrorsType
   */
  public function getErrors()
  {
    return $this->Errors;
  }

  /**
   * 
   * @param ErrorsType $Errors
   */
  public function setErrors($Errors)
  {
    $this->Errors = $Errors;
  }

}
