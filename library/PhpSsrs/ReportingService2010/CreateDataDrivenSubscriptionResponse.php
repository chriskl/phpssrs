<?php

namespace PhpSsrs\ReportingService2010;

class CreateDataDrivenSubscriptionResponse
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
