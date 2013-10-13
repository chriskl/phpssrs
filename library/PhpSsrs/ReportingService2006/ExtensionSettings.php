<?php

namespace PhpSsrs\ReportingService2006;

class ExtensionSettings
{

  /**
   * 
   * @var string $Extension
   * @access public
   */
  public $Extension = null;

  /**
   * 
   * @var Choice1[] $ParameterValues
   * @access public
   */
  public $ParameterValues = null;

  /**
   * 
   * @param string $Extension
   * @param Choice1[] $ParameterValues
   * @access public
   */
  public function __construct($Extension = null, $ParameterValues = null)
  {
    $this->Extension = $Extension;
    $this->ParameterValues = $ParameterValues;
  }

}
