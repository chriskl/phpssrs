<?php

namespace PhpSsrs\ReportExecutionService;

class ReportPaperSize
{

  /**
   * 
   * @var float $Height
   * @access public
   */
  public $Height = null;

  /**
   * 
   * @var float $Width
   * @access public
   */
  public $Width = null;

  /**
   * 
   * @param float $Height
   * @param float $Width
   * @access public
   */
  public function __construct($Height = null, $Width = null)
  {
    $this->Height = $Height;
    $this->Width = $Width;
  }

}
