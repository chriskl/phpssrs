<?php

namespace PhpSsrs\ReportingService2006;

class PrepareQuery
{

  /**
   * 
   * @var DataSource $DataSource
   * @access public
   */
  public $DataSource = null;

  /**
   * 
   * @var DataSetDefinition $DataSet
   * @access public
   */
  public $DataSet = null;

  /**
   * 
   * @param DataSource $DataSource
   * @param DataSetDefinition $DataSet
   * @access public
   */
  public function __construct($DataSource = null, $DataSet = null)
  {
    $this->DataSource = $DataSource;
    $this->DataSet = $DataSet;
  }

}
