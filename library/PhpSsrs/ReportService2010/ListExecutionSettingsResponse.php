<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($ListExecutionSettingsResult)
  {
    $this->ListExecutionSettingsResult = $ListExecutionSettingsResult;
  }

}
