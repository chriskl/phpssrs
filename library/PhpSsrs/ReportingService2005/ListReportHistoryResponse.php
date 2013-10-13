<?php

namespace PhpSsrs\ReportingService2005;

class ListReportHistoryResponse
{

  /**
   * 
   * @var ReportHistorySnapshot[] $ReportHistory
   * @access public
   */
  public $ReportHistory = null;

  /**
   * 
   * @param ReportHistorySnapshot[] $ReportHistory
   * @access public
   */
  public function __construct($ReportHistory = null)
  {
    $this->ReportHistory = $ReportHistory;
  }

}
