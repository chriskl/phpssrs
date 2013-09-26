<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($DataDrivenSubscriptionID)
  {
    $this->DataDrivenSubscriptionID = $DataDrivenSubscriptionID;
  }

}
