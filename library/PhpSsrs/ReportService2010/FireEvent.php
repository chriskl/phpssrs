<?php

namespace PhpSsrs\ReportService2010;

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
   * @var string $SiteUrl
   * @access public
   */
  public $SiteUrl = null;

  /**
   * 
   * @param string $EventType
   * @param string $EventData
   * @param string $SiteUrl
   * @access public
   */
  public function __construct($EventType, $EventData, $SiteUrl)
  {
    $this->EventType = $EventType;
    $this->EventData = $EventData;
    $this->SiteUrl = $SiteUrl;
  }

}
