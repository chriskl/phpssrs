<?php

namespace PhpSsrs\ReportingService2005;

class ValidateExtensionSettings
{

  /**
   * 
   * @var string $Extension
   * @access public
   */
  public $Extension = null;

  /**
   * 
   * @var ParameterValueOrFieldReference[] $ParameterValues
   * @access public
   */
  public $ParameterValues = null;

  /**
   * 
   * @param string $Extension
   * @param ParameterValueOrFieldReference[] $ParameterValues
   * @access public
   */
  public function __construct($Extension, $ParameterValues)
  {
    $this->Extension = $Extension;
    $this->ParameterValues = $ParameterValues;
  }

}
