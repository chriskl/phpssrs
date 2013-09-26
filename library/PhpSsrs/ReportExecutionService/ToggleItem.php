<?php

namespace PhpSsrs\ReportExecutionService;

class ToggleItem
{

  /**
   * 
   * @var string $ToggleID
   * @access public
   */
  public $ToggleID = null;

  /**
   * 
   * @param string $ToggleID
   * @access public
   */
  public function __construct($ToggleID)
  {
    $this->ToggleID = $ToggleID;
  }

}
