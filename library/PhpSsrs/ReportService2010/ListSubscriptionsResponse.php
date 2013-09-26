<?php

namespace PhpSsrs\ReportService2010;

class ListSubscriptionsResponse
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
  public function __construct($SubscriptionItems)
  {
    $this->SubscriptionItems = $SubscriptionItems;
  }

}
