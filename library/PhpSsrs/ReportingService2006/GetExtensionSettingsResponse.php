<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($ExtensionParameters)
  {
    $this->ExtensionParameters = $ExtensionParameters;
  }

}
