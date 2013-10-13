<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Reports = null)
  {
    $this->Reports = $Reports;
  }

}
