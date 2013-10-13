<?php

namespace PhpSsrs\ReportExecutionService;

class LoadDrillthroughTarget2
{

  /**
   * 
   * @var string $DrillthroughID
   * @access public
   */
  public $DrillthroughID = null;

  /**
   * 
   * @param string $DrillthroughID
   * @access public
   */
  public function __construct($DrillthroughID = null)
  {
    $this->DrillthroughID = $DrillthroughID;
  }

}
