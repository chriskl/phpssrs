<?php

namespace PhpSsrs\ReportService2010;

class DataSource
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var InvalidDataSourceReference $InvalidDataSourceReference
   * @access public
   */
  public $InvalidDataSourceReference = null;

  /**
   * 
   * @var DataSourceReference $DataSourceReference
   * @access public
   */
  public $DataSourceReference = null;

  /**
   * 
   * @var DataSourceDefinition $DataSourceDefinition
   * @access public
   */
  public $DataSourceDefinition = null;

  /**
   * 
   * @param string $Name
   * @param InvalidDataSourceReference $InvalidDataSourceReference
   * @param DataSourceReference $DataSourceReference
   * @param DataSourceDefinition $DataSourceDefinition
   * @access public
   */
  public function __construct($Name, $InvalidDataSourceReference, $DataSourceReference, $DataSourceDefinition)
  {
    $this->Name = $Name;
    $this->InvalidDataSourceReference = $InvalidDataSourceReference;
    $this->DataSourceReference = $DataSourceReference;
    $this->DataSourceDefinition = $DataSourceDefinition;
  }

}
