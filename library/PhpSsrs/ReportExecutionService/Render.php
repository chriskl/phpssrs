<?php

namespace PhpSsrs\ReportExecutionService;

class Render
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
   * @param string $Format
   * @param string $DeviceInfo
   * @access public
   */
  public function __construct($Format, $DeviceInfo)
  {
    $this->Format = $Format;
    $this->DeviceInfo = $DeviceInfo;
  }

}
