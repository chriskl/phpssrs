<?php

namespace PhpSsrs\ReportingService2005;

class GetDataDrivenSubscriptionProperties
{

  /**
   * 
   * @var string $DataDrivenSubscriptionID
   * @access public
   */
  public $DataDrivenSubscriptionID = null;

  /**
   * 
   * @param string $DataDrivenSubscriptionID
   * @access public
   */
  public function __construct($DataDrivenSubscriptionID = null)
  {
    $this->DataDrivenSubscriptionID = $DataDrivenSubscriptionID;
  }

}
