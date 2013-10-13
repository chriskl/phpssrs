<?php

namespace PhpSsrs\ReportExecutionService;

class LoadDrillthroughTargetResponse
{

  /**
   * 
   * @var ExecutionInfo $ExecutionInfo
   * @access public
   */
  public $ExecutionInfo = null;

  /**
   * 
   * @param ExecutionInfo $ExecutionInfo
   * @access public
   */
  public function __construct($ExecutionInfo = null)
  {
    $this->ExecutionInfo = $ExecutionInfo;
  }

}
