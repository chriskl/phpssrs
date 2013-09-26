<?php

namespace PhpSsrs\ReportExecutionService;

class SortResponse
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
   * @var int $NumPages
   * @access public
   */
  public $NumPages = null;

  /**
   * 
   * @param int $PageNumber
   * @param string $ReportItem
   * @param int $NumPages
   * @access public
   */
  public function __construct($PageNumber, $ReportItem, $NumPages)
  {
    $this->PageNumber = $PageNumber;
    $this->ReportItem = $ReportItem;
    $this->NumPages = $NumPages;
  }

}
