<?php

namespace PhpSsrs\ReportingService2010;

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
