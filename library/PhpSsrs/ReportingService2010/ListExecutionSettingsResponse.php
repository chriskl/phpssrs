<?php

namespace PhpSsrs\ReportingService2010;

class ListExecutionSettingsResponse
{

  /**
   * 
   * @var String1[] $ListExecutionSettingsResult
   * @access public
   */
  public $ListExecutionSettingsResult = null;

  /**
   * 
   * @param String1[] $ListExecutionSettingsResult
   * @access public
   */
  public function __construct($ListExecutionSettingsResult = null)
  {
    $this->ListExecutionSettingsResult = $ListExecutionSettingsResult;
  }

}
