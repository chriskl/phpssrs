<?php

namespace PhpSsrs\ReportingService2010;

class GetCacheRefreshPlanProperties
{

  /**
   * 
   * @var string $CacheRefreshPlanID
   * @access public
   */
  public $CacheRefreshPlanID = null;

  /**
   * 
   * @param string $CacheRefreshPlanID
   * @access public
   */
  public function __construct($CacheRefreshPlanID)
  {
    $this->CacheRefreshPlanID = $CacheRefreshPlanID;
  }

}
