<?php

namespace Ibrows\PostBarcodeBundle\Soap\Classes\Barcode;

class Dimensions
{

  /**
   * 
   * @var Weight $Weight
   * @access public
   */
  public $Weight = null;

  /**
   * 
   * @param Weight $Weight
   * @access public
   */
  public function __construct($Weight = null)
  {
    $this->Weight = $Weight;
  }

  /**
   * 
   * @return Weight
   */
  public function getWeight()
  {
    return $this->Weight;
  }

  /**
   * 
   * @param Weight $Weight
   */
  public function setWeight($Weight)
  {
    $this->Weight = $Weight;
  }

}
