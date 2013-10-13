<?php

namespace PhpSsrs\ReportExecutionService;

class FindStringResponse
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
  public function __construct($PageNumber = null)
  {
    $this->PageNumber = $PageNumber;
  }

}
