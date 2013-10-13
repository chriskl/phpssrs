<?php

namespace PhpSsrs\ReportingService2005;

class ReportHistorySnapshot
{

  /**
   * 
   * @var string $HistoryID
   * @access public
   */
  public $HistoryID = null;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate = null;

  /**
   * 
   * @var int $Size
   * @access public
   */
  public $Size = null;

  /**
   * 
   * @param string $HistoryID
   * @param dateTime $CreationDate
   * @param int $Size
   * @access public
   */
  public function __construct($HistoryID = null, $CreationDate = null, $Size = null)
  {
    $this->HistoryID = $HistoryID;
    $this->CreationDate = $CreationDate;
    $this->Size = $Size;
  }

}
