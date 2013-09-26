<?php

namespace PhpSsrs\ReportExecutionService;

class LoadReportDefinitionResponse
{

  /**
   * 
   * @var ExecutionInfo $executionInfo
   * @access public
   */
  public $executionInfo = null;

  /**
   * 
   * @var Warning[] $warnings
   * @access public
   */
  public $warnings = null;

  /**
   * 
   * @param ExecutionInfo $executionInfo
   * @param Warning[] $warnings
   * @access public
   */
  public function __construct($executionInfo, $warnings)
  {
    $this->executionInfo = $executionInfo;
    $this->warnings = $warnings;
  }

}
