<?php

namespace PhpSsrs\ReportingService2010;

class GetItemDataSourcesResponse
{

  /**
   * 
   * @var DataSource[] $DataSources
   * @access public
   */
  public $DataSources = null;

  /**
   * 
   * @param DataSource[] $DataSources
   * @access public
   */
  public function __construct($DataSources = null)
  {
    $this->DataSources = $DataSources;
  }

}
