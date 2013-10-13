<?php

namespace PhpSsrs\ReportingService2006;

class ListReportSubscriptionsResponse
{

  /**
   * 
   * @var Subscription[] $SubscriptionItems
   * @access public
   */
  public $SubscriptionItems = null;

  /**
   * 
   * @param Subscription[] $SubscriptionItems
   * @access public
   */
  public function __construct($SubscriptionItems = null)
  {
    $this->SubscriptionItems = $SubscriptionItems;
  }

}
