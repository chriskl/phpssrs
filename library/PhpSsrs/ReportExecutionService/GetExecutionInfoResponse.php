<?php

namespace PhpSsrs\ReportExecutionService;

class GetExecutionInfoResponse
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
