<?php

namespace PhpSsrs\ReportingService2010;

class DeleteCacheRefreshPlan
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
  public function __construct($CacheRefreshPlanID = null)
  {
    $this->CacheRefreshPlanID = $CacheRefreshPlanID;
  }

}
