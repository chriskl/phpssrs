<?php

namespace PhpSsrs\ReportingService2010;

class SetCacheOptions
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var boolean $CacheItem
   * @access public
   */
  public $CacheItem = null;

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
   * @param string $ItemPath
   * @param boolean $CacheItem
   * @param TimeExpiration $TimeExpiration
   * @param ScheduleExpiration $ScheduleExpiration
   * @access public
   */
  public function __construct($ItemPath = null, $CacheItem = null, $TimeExpiration = null, $ScheduleExpiration = null)
  {
    $this->ItemPath = $ItemPath;
    $this->CacheItem = $CacheItem;
    $this->TimeExpiration = $TimeExpiration;
    $this->ScheduleExpiration = $ScheduleExpiration;
  }

}
