<?php

namespace PhpSsrs\ReportingService2005;

class GetDataSourceContentsResponse
{

  /**
   * 
   * @var DataSourceDefinition $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param DataSourceDefinition $Definition
   * @access public
   */
  public function __construct($Definition)
  {
    $this->Definition = $Definition;
  }

}
