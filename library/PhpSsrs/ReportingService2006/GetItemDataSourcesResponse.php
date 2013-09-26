<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($DataSources)
  {
    $this->DataSources = $DataSources;
  }

}
