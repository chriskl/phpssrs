<?php

namespace PhpSsrs\ReportingService2005;

class ListScheduledReportsResponse
{

  /**
   * 
   * @var CatalogItem[] $Reports
   * @access public
   */
  public $Reports = null;

  /**
   * 
   * @param CatalogItem[] $Reports
   * @access public
   */
  public function __construct($Reports)
  {
    $this->Reports = $Reports;
  }

}
