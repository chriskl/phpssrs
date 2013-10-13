<?php

namespace PhpSsrs\ReportExecutionService;

class Sort
{

  /**
   * 
   * @var string $SortItem
   * @access public
   */
  public $SortItem = null;

  /**
   * 
   * @var SortDirectionEnum $Direction
   * @access public
   */
  public $Direction = null;

  /**
   * 
   * @var boolean $Clear
   * @access public
   */
  public $Clear = null;

  /**
   * 
   * @param string $SortItem
   * @param SortDirectionEnum $Direction
   * @param boolean $Clear
   * @access public
   */
  public function __construct($SortItem = null, $Direction = null, $Clear = null)
  {
    $this->SortItem = $SortItem;
    $this->Direction = $Direction;
    $this->Clear = $Clear;
  }

}
