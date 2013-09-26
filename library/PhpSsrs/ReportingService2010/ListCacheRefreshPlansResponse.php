<?php

namespace PhpSsrs\ReportingService2010;

class ListCacheRefreshPlansResponse
{

  /**
   * 
   * @var CacheRefreshPlan[] $CacheRefreshPlans
   * @access public
   */
  public $CacheRefreshPlans = null;

  /**
   * 
   * @param CacheRefreshPlan[] $CacheRefreshPlans
   * @access public
   */
  public function __construct($CacheRefreshPlans)
  {
    $this->CacheRefreshPlans = $CacheRefreshPlans;
  }

}
