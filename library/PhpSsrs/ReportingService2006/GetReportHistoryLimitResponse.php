<?php

namespace PhpSsrs\ReportingService2006;

class GetReportHistoryLimitResponse
{

  /**
   * 
   * @var int $HistoryLimit
   * @access public
   */
  public $HistoryLimit = null;

  /**
   * 
   * @var boolean $IsSystem
   * @access public
   */
  public $IsSystem = null;

  /**
   * 
   * @var int $SystemLimit
   * @access public
   */
  public $SystemLimit = null;

  /**
   * 
   * @param int $HistoryLimit
   * @param boolean $IsSystem
   * @param int $SystemLimit
   * @access public
   */
  public function __construct($HistoryLimit = null, $IsSystem = null, $SystemLimit = null)
  {
    $this->HistoryLimit = $HistoryLimit;
    $this->IsSystem = $IsSystem;
    $this->SystemLimit = $SystemLimit;
  }

}
