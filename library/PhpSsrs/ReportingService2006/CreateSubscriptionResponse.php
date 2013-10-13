<?php

namespace PhpSsrs\ReportingService2006;

class CreateSubscriptionResponse
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
