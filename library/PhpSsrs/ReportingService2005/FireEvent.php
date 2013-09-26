<?php

namespace PhpSsrs\ReportingService2005;

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
   * @param string $EventType
   * @param string $EventData
   * @access public
   */
  public function __construct($EventType, $EventData)
  {
    $this->EventType = $EventType;
    $this->EventData = $EventData;
  }

}
