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
  public function __construct($PageNumber = null, $ReportItem = null, $NumPages = null)
  {
    $this->PageNumber = $PageNumber;
    $this->ReportItem = $ReportItem;
    $this->NumPages = $NumPages;
  }

}
