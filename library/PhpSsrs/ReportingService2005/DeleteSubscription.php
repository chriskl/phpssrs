<?php

namespace PhpSsrs\ReportingService2005;

class DeleteSubscription
{

  /**
   * 
   * @var string $SubscriptionID
   * @access public
   */
  public $SubscriptionID = null;

  /**
   * 
   * @param string $SubscriptionID
   * @access public
   */
  public function __construct($SubscriptionID = null)
  {
    $this->SubscriptionID = $SubscriptionID;
  }

}
