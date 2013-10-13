<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($ItemPath = null, $HistoryID = null)
  {
    $this->ItemPath = $ItemPath;
    $this->HistoryID = $HistoryID;
  }

}
