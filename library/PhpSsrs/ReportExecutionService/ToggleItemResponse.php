<?php

namespace PhpSsrs\ReportExecutionService;

class ToggleItemResponse
{

  /**
   * 
   * @var boolean $Found
   * @access public
   */
  public $Found = null;

  /**
   * 
   * @param boolean $Found
   * @access public
   */
  public function __construct($Found)
  {
    $this->Found = $Found;
  }

}
