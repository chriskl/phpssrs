<?php

namespace PhpSsrs\ReportingService2005;

class SetCacheOptions
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

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
   * @param string $Report
   * @param boolean $CacheReport
   * @param ScheduleExpiration $ScheduleExpiration
   * @param TimeExpiration $TimeExpiration
   * @access public
   */
  public function __construct($Report = null, $CacheReport = null, $ScheduleExpiration = null, $TimeExpiration = null)
  {
    $this->Report = $Report;
    $this->CacheReport = $CacheReport;
    $this->ScheduleExpiration = $ScheduleExpiration;
    $this->TimeExpiration = $TimeExpiration;
  }

}
