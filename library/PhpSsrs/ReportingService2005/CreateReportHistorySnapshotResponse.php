<?php

namespace PhpSsrs\ReportingService2005;

class CreateReportHistorySnapshotResponse
{

  /**
   * 
   * @var string $HistoryID
   * @access public
   */
  public $HistoryID = null;

  /**
   * 
   * @var Warning[] $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @param string $HistoryID
   * @param Warning[] $Warnings
   * @access public
   */
  public function __construct($HistoryID, $Warnings)
  {
    $this->HistoryID = $HistoryID;
    $this->Warnings = $Warnings;
  }

}
