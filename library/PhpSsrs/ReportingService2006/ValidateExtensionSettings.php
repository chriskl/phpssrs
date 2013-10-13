<?php

namespace PhpSsrs\ReportingService2006;

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
   * @var string $Site
   * @access public
   */
  public $Site = null;

  /**
   * 
   * @param string $Extension
   * @param ParameterValueOrFieldReference[] $ParameterValues
   * @param string $Site
   * @access public
   */
  public function __construct($Extension = null, $ParameterValues = null, $Site = null)
  {
    $this->Extension = $Extension;
    $this->ParameterValues = $ParameterValues;
    $this->Site = $Site;
  }

}
