<?php

namespace PhpSsrs\ReportExecutionService;

class Render2
{

  /**
   * 
   * @var string $Format
   * @access public
   */
  public $Format = null;

  /**
   * 
   * @var string $DeviceInfo
   * @access public
   */
  public $DeviceInfo = null;

  /**
   * 
   * @var PageCountMode $PaginationMode
   * @access public
   */
  public $PaginationMode = null;

  /**
   * 
   * @param string $Format
   * @param string $DeviceInfo
   * @param PageCountMode $PaginationMode
   * @access public
   */
  public function __construct($Format = null, $DeviceInfo = null, $PaginationMode = null)
  {
    $this->Format = $Format;
    $this->DeviceInfo = $DeviceInfo;
    $this->PaginationMode = $PaginationMode;
  }

}
