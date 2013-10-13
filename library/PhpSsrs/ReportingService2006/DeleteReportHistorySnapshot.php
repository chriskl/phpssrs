<?php

namespace PhpSsrs\ReportingService2006;

class DeleteReportHistorySnapshot
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
  public function __construct($Report = null, $HistoryID = null)
  {
    $this->Report = $Report;
    $this->HistoryID = $HistoryID;
  }

}
