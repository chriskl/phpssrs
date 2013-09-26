<?php

namespace PhpSsrs\ReportingService2006;

class DataRetrievalPlan
{

  /**
   * 
   * @var DataSourceDefinition $DataSourceDefinition
   * @access public
   */
  public $DataSourceDefinition = null;

  /**
   * 
   * @var DataSourceReference $DataSourceReference
   * @access public
   */
  public $DataSourceReference = null;

  /**
   * 
   * @var InvalidDataSourceReference $InvalidDataSourceReference
   * @access public
   */
  public $InvalidDataSourceReference = null;

  /**
   * 
   * @var DataSetDefinition $DataSet
   * @access public
   */
  public $DataSet = null;

  /**
   * 
   * @param DataSourceDefinition $DataSourceDefinition
   * @param DataSourceReference $DataSourceReference
   * @param InvalidDataSourceReference $InvalidDataSourceReference
   * @param DataSetDefinition $DataSet
   * @access public
   */
  public function __construct($DataSourceDefinition, $DataSourceReference, $InvalidDataSourceReference, $DataSet)
  {
    $this->DataSourceDefinition = $DataSourceDefinition;
    $this->DataSourceReference = $DataSourceReference;
    $this->InvalidDataSourceReference = $InvalidDataSourceReference;
    $this->DataSet = $DataSet;
  }

}
