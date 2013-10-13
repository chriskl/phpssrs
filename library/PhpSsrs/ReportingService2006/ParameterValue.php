<?php

namespace PhpSsrs\ReportingService2006;

class ParameterValue
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Value
   * @access public
   */
  public $Value = null;

  /**
   * 
   * @var string $Label
   * @access public
   */
  public $Label = null;

  /**
   * 
   * @param string $Name
   * @param string $Value
   * @param string $Label
   * @access public
   */
  public function __construct($Name = null, $Value = null, $Label = null)
  {
    $this->Name = $Name;
    $this->Value = $Value;
    $this->Label = $Label;
  }

}
