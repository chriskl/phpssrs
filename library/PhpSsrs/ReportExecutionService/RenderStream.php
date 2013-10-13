<?php

namespace PhpSsrs\ReportExecutionService;

class RenderStream
{

  /**
   * 
   * @var string $Format
   * @access public
   */
  public $Format = null;

  /**
   * 
   * @var string $StreamID
   * @access public
   */
  public $StreamID = null;

  /**
   * 
   * @var string $DeviceInfo
   * @access public
   */
  public $DeviceInfo = null;

  /**
   * 
   * @param string $Format
   * @param string $StreamID
   * @param string $DeviceInfo
   * @access public
   */
  public function __construct($Format = null, $StreamID = null, $DeviceInfo = null)
  {
    $this->Format = $Format;
    $this->StreamID = $StreamID;
    $this->DeviceInfo = $DeviceInfo;
  }

}
