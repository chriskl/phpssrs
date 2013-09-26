<?php

namespace PhpSsrs\ReportExecutionService;

class LoadDrillthroughTarget2Response
{

  /**
   * 
   * @var ExecutionInfo2 $ExecutionInfo
   * @access public
   */
  public $ExecutionInfo = null;

  /**
   * 
   * @param ExecutionInfo2 $ExecutionInfo
   * @access public
   */
  public function __construct($ExecutionInfo)
  {
    $this->ExecutionInfo = $ExecutionInfo;
  }

}
