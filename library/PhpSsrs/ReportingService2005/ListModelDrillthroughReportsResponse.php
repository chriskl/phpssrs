<?php

namespace PhpSsrs\ReportingService2005;

class ListModelDrillthroughReportsResponse
{

  /**
   * 
   * @var ModelDrillthroughReport[] $Reports
   * @access public
   */
  public $Reports = null;

  /**
   * 
   * @param ModelDrillthroughReport[] $Reports
   * @access public
   */
  public function __construct($Reports)
  {
    $this->Reports = $Reports;
  }

}
