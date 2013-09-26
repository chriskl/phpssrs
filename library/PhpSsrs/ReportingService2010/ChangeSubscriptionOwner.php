<?php

namespace PhpSsrs\ReportingService2010;

class ChangeSubscriptionOwner
{

  /**
   * 
   * @var string $SubscriptionID
   * @access public
   */
  public $SubscriptionID = null;

  /**
   * 
   * @var string $NewOwner
   * @access public
   */
  public $NewOwner = null;

  /**
   * 
   * @param string $SubscriptionID
   * @param string $NewOwner
   * @access public
   */
  public function __construct($SubscriptionID, $NewOwner)
  {
    $this->SubscriptionID = $SubscriptionID;
    $this->NewOwner = $NewOwner;
  }

}
