<?php

namespace PhpSsrs\ReportingService2006;

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
   * @var ScheduleExpiration $ScheduleExpiration
   * @access public
   */
  public $ScheduleExpiration = null;

  /**
   * 
   * @var TimeExpiration $TimeExpiration
   * @access public
   */
  public $TimeExpiration = null;

  /**
   * 
   * @param boolean $CacheReport
   * @param ScheduleExpiration $ScheduleExpiration
   * @param TimeExpiration $TimeExpiration
   * @access public
   */
  public function __construct($CacheReport = null, $ScheduleExpiration = null, $TimeExpiration = null)
  {
    $this->CacheReport = $CacheReport;
    $this->ScheduleExpiration = $ScheduleExpiration;
    $this->TimeExpiration = $TimeExpiration;
  }

}
