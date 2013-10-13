<?php

namespace PhpSsrs\ReportExecutionService;

class ExecutionHeader
{

  /**
   * 
   * @var string $ExecutionID
   * @access public
   */
  public $ExecutionID = null;

  /**
   * 
   * @param string $ExecutionID
   * @access public
   */
  public function __construct($ExecutionID = null)
  {
    $this->ExecutionID = $ExecutionID;
  }

}
