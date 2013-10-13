<?php

namespace PhpSsrs\ReportingService2010;

class GetExtensionSettingsResponse
{

  /**
   * 
   * @var ExtensionParameter[] $ExtensionParameters
   * @access public
   */
  public $ExtensionParameters = null;

  /**
   * 
   * @param ExtensionParameter[] $ExtensionParameters
   * @access public
   */
  public function __construct($ExtensionParameters = null)
  {
    $this->ExtensionParameters = $ExtensionParameters;
  }

}
