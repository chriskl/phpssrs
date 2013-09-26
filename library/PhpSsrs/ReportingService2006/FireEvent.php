<?php

namespace PhpSsrs\ReportingService2006;

class FireEvent
{

  /**
   * 
   * @var string $EventType
   * @access public
   */
  public $EventType = null;

  /**
   * 
   * @var string $EventData
   * @access public
   */
  public $EventData = null;

  /**
   * 
   * @var string $Site
   * @access public
   */
  public $Site = null;

  /**
   * 
   * @param string $EventType
   * @param string $EventData
   * @param string $Site
   * @access public
   */
  public function __construct($EventType, $EventData, $Site)
  {
    $this->EventType = $EventType;
    $this->EventData = $EventData;
    $this->Site = $Site;
  }

}
