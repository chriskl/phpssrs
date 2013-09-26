<?php

namespace PhpSsrs\ReportExecutionService;

class ReportMargins
{

  /**
   * 
   * @var float $Top
   * @access public
   */
  public $Top = null;

  /**
   * 
   * @var float $Bottom
   * @access public
   */
  public $Bottom = null;

  /**
   * 
   * @var float $Left
   * @access public
   */
  public $Left = null;

  /**
   * 
   * @var float $Right
   * @access public
   */
  public $Right = null;

  /**
   * 
   * @param float $Top
   * @param float $Bottom
   * @param float $Left
   * @param float $Right
   * @access public
   */
  public function __construct($Top, $Bottom, $Left, $Right)
  {
    $this->Top = $Top;
    $this->Bottom = $Bottom;
    $this->Left = $Left;
    $this->Right = $Right;
  }

}
