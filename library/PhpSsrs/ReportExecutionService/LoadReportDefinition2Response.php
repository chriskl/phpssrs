<?php

namespace PhpSsrs\ReportExecutionService;

class LoadReportDefinition2Response
{

  /**
   * 
   * @var ExecutionInfo2 $executionInfo
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
   * @param ExecutionInfo2 $executionInfo
   * @param Warning[] $warnings
   * @access public
   */
  public function __construct($executionInfo = null, $warnings = null)
  {
    $this->executionInfo = $executionInfo;
    $this->warnings = $warnings;
  }

}
