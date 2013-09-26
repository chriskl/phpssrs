<?php

namespace PhpSsrs\ReportService2010;

class GetDataSourceContents
{

  /**
   * 
   * @var string $DataSource
   * @access public
   */
  public $DataSource = null;

  /**
   * 
   * @param string $DataSource
   * @access public
   */
  public function __construct($DataSource)
  {
    $this->DataSource = $DataSource;
  }

}
