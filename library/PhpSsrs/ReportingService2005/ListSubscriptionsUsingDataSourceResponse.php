<?php

namespace PhpSsrs\ReportingService2005;

class ListSubscriptionsUsingDataSourceResponse
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
