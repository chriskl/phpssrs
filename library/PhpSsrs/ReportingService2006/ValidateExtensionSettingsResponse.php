<?php

namespace PhpSsrs\ReportingService2006;

class ValidateExtensionSettingsResponse
{

  /**
   * 
   * @var ExtensionParameter[] $ParameterErrors
   * @access public
   */
  public $ParameterErrors = null;

  /**
   * 
   * @param ExtensionParameter[] $ParameterErrors
   * @access public
   */
  public function __construct($ParameterErrors = null)
  {
    $this->ParameterErrors = $ParameterErrors;
  }

}
