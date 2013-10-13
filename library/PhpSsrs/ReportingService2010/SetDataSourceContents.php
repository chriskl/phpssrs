<?php

namespace PhpSsrs\ReportingService2010;

class SetDataSourceContents
{

  /**
   * 
   * @var string $DataSource
   * @access public
   */
  public $DataSource = null;

  /**
   * 
   * @var DataSourceDefinition $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param string $DataSource
   * @param DataSourceDefinition $Definition
   * @access public
   */
  public function __construct($DataSource = null, $Definition = null)
  {
    $this->DataSource = $DataSource;
    $this->Definition = $Definition;
  }

}
