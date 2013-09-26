<?php

namespace PhpSsrs\ReportExecutionService;

class LoadReport
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var string $HistoryID
   * @access public
   */
  public $HistoryID = null;

  /**
   * 
   * @param string $Report
   * @param string $HistoryID
   * @access public
   */
  public function __construct($Report, $HistoryID)
  {
    $this->Report = $Report;
    $this->HistoryID = $HistoryID;
  }

}
