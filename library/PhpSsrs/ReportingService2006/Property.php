<?php

namespace PhpSsrs\ReportingService2006;

class Property
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
   * @param string $Name
   * @param string $Value
   * @access public
   */
  public function __construct($Name, $Value)
  {
    $this->Name = $Name;
    $this->Value = $Value;
  }

}
