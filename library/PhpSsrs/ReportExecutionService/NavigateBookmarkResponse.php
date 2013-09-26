<?php

namespace PhpSsrs\ReportExecutionService;

class NavigateBookmarkResponse
{

  /**
   * 
   * @var int $PageNumber
   * @access public
   */
  public $PageNumber = null;

  /**
   * 
   * @var string $UniqueName
   * @access public
   */
  public $UniqueName = null;

  /**
   * 
   * @param int $PageNumber
   * @param string $UniqueName
   * @access public
   */
  public function __construct($PageNumber, $UniqueName)
  {
    $this->PageNumber = $PageNumber;
    $this->UniqueName = $UniqueName;
  }

}
