<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($ParameterErrors)
  {
    $this->ParameterErrors = $ParameterErrors;
  }

}
