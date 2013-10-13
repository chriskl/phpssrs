<?php

namespace PhpSsrs\ReportingService2005;

class GetRenderResource
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
  public function __construct($Format = null, $DeviceInfo = null)
  {
    $this->Format = $Format;
    $this->DeviceInfo = $DeviceInfo;
  }

}
