<?php

namespace PhpSsrs\ReportService2010;

class DeleteItemHistorySnapshot
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $HistoryID
   * @access public
   */
  public $HistoryID = null;

  /**
   * 
   * @param string $ItemPath
   * @param string $HistoryID
   * @access public
   */
  public function __construct($ItemPath, $HistoryID)
  {
    $this->ItemPath = $ItemPath;
    $this->HistoryID = $HistoryID;
  }

}
