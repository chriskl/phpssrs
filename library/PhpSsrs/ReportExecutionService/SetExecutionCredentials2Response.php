<?php

namespace PhpSsrs\ReportExecutionService;

class SetExecutionCredentials2Response
{

  /**
   * 
   * @var ExecutionInfo2 $executionInfo
   * @access public
   */
  public $executionInfo = null;

  /**
   * 
   * @param ExecutionInfo2 $executionInfo
   * @access public
   */
  public function __construct($executionInfo = null)
  {
    $this->executionInfo = $executionInfo;
  }

}
