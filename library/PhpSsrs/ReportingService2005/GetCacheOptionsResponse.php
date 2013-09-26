<?php

namespace PhpSsrs\ReportingService2005;

class GetCacheOptionsResponse
{

  /**
   * 
   * @var boolean $CacheReport
   * @access public
   */
  public $CacheReport = null;

  /**
   * 
   * @var TimeExpiration $TimeExpiration
   * @access public
   */
  public $TimeExpiration = null;

  /**
   * 
   * @var ScheduleExpiration $ScheduleExpiration
   * @access public
   */
  public $ScheduleExpiration = null;

  /**
   * 
   * @param boolean $CacheReport
   * @param TimeExpiration $TimeExpiration
   * @param ScheduleExpiration $ScheduleExpiration
   * @access public
   */
  public function __construct($CacheReport, $TimeExpiration, $ScheduleExpiration)
  {
    $this->CacheReport = $CacheReport;
    $this->TimeExpiration = $TimeExpiration;
    $this->ScheduleExpiration = $ScheduleExpiration;
  }

}
