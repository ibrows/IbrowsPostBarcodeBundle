<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class ReadAdditionalServicesResponse
{

  /**
   * 
   * @var ServiceCode $AdditionalService
   * @access public
   */
  public $AdditionalService = null;

  /**
   * 
   * @var ErrorsType $Errors
   * @access public
   */
  public $Errors = null;

  /**
   * 
   * @param ServiceCode $AdditionalService
   * @param ErrorsType $Errors
   * @access public
   */
  public function __construct($AdditionalService = null, $Errors = null)
  {
    $this->AdditionalService = $AdditionalService;
    $this->Errors = $Errors;
  }

  /**
   * 
   * @return ServiceCode
   */
  public function getAdditionalService()
  {
    return $this->AdditionalService;
  }

  /**
   * 
   * @param ServiceCode $AdditionalService
   */
  public function setAdditionalService($AdditionalService)
  {
    $this->AdditionalService = $AdditionalService;
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
