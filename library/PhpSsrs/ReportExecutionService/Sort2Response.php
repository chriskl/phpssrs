<?php

namespace PhpSsrs\ReportExecutionService;

class Sort2Response
{

  /**
   * 
   * @var int $PageNumber
   * @access public
   */
  public $PageNumber = null;

  /**
   * 
   * @var string $ReportItem
   * @access public
   */
  public $ReportItem = null;

  /**
   * 
   * @var ExecutionInfo2 $ExecutionInfo
   * @access public
   */
  public $ExecutionInfo = null;

  /**
   * 
   * @param int $PageNumber
   * @param string $ReportItem
   * @param ExecutionInfo2 $ExecutionInfo
   * @access public
   */
  public function __construct($PageNumber, $ReportItem, $ExecutionInfo)
  {
    $this->PageNumber = $PageNumber;
    $this->ReportItem = $ReportItem;
    $this->ExecutionInfo = $ExecutionInfo;
  }

}
