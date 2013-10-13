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
  public function __construct($PageNumber = null, $UniqueName = null)
  {
    $this->PageNumber = $PageNumber;
    $this->UniqueName = $UniqueName;
  }

}
