<?php

namespace PhpSsrs\ReportExecutionService;

class SetExecutionParametersResponse
{

  /**
   * 
   * @var ExecutionInfo $executionInfo
   * @access public
   */
  public $executionInfo = null;

  /**
   * 
   * @param ExecutionInfo $executionInfo
   * @access public
   */
  public function __construct($executionInfo = null)
  {
    $this->executionInfo = $executionInfo;
  }

}
