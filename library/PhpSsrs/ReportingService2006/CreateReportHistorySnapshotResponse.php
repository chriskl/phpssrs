<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($HistoryID = null, $Warnings = null)
  {
    $this->HistoryID = $HistoryID;
    $this->Warnings = $Warnings;
  }

}
