<?php

namespace PhpSsrs\ReportingService2005;

class SetReportHistoryLimit
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var boolean $UseSystem
   * @access public
   */
  public $UseSystem = null;

  /**
   * 
   * @var int $HistoryLimit
   * @access public
   */
  public $HistoryLimit = null;

  /**
   * 
   * @param string $Report
   * @param boolean $UseSystem
   * @param int $HistoryLimit
   * @access public
   */
  public function __construct($Report = null, $UseSystem = null, $HistoryLimit = null)
  {
    $this->Report = $Report;
    $this->UseSystem = $UseSystem;
    $this->HistoryLimit = $HistoryLimit;
  }

}
