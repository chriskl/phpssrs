<?php

namespace PhpSsrs\ReportExecutionService;

class ExecutionInfo2
{

  /**
   * 
   * @var PageCountMode $PageCountMode
   * @access public
   */
  public $PageCountMode = null;

  /**
   * 
   * @param PageCountMode $PageCountMode
   * @access public
   */
  public function __construct($PageCountMode = null)
  {
    $this->PageCountMode = $PageCountMode;
  }

}
