<?php

namespace PhpSsrs\ReportExecutionService;

class ResetExecutionResponse
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
  public function __construct($executionInfo)
  {
    $this->executionInfo = $executionInfo;
  }

}
