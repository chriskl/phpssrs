<?php

namespace PhpSsrs\ReportExecutionService;

class NavigateDocumentMapResponse
{

  /**
   * 
   * @var int $PageNumber
   * @access public
   */
  public $PageNumber = null;

  /**
   * 
   * @param int $PageNumber
   * @access public
   */
  public function __construct($PageNumber)
  {
    $this->PageNumber = $PageNumber;
  }

}
