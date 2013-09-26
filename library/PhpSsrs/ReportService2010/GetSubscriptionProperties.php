<?php

namespace PhpSsrs\ReportService2010;

class GetSubscriptionProperties
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
  public function __construct($SubscriptionID)
  {
    $this->SubscriptionID = $SubscriptionID;
  }

}
