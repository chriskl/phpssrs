<?php

namespace PhpSsrs\ReportingService2006;

class ValidValue
{

  /**
   * 
   * @var string $Label
   * @access public
   */
  public $Label = null;

  /**
   * 
   * @var string $Value
   * @access public
   */
  public $Value = null;

  /**
   * 
   * @param string $Label
   * @param string $Value
   * @access public
   */
  public function __construct($Label = null, $Value = null)
  {
    $this->Label = $Label;
    $this->Value = $Value;
  }

}
