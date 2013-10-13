<?php

namespace PhpSsrs\ReportExecutionService;

class Sort2
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
   * @var PageCountMode $PaginationMode
   * @access public
   */
  public $PaginationMode = null;

  /**
   * 
   * @param string $SortItem
   * @param SortDirectionEnum $Direction
   * @param boolean $Clear
   * @param PageCountMode $PaginationMode
   * @access public
   */
  public function __construct($SortItem = null, $Direction = null, $Clear = null, $PaginationMode = null)
  {
    $this->SortItem = $SortItem;
    $this->Direction = $Direction;
    $this->Clear = $Clear;
    $this->PaginationMode = $PaginationMode;
  }

}
