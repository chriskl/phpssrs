<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($Definition = null)
  {
    $this->Definition = $Definition;
  }

}
