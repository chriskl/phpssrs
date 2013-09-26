<?php

namespace PhpSsrs\ReportingService2005;

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
