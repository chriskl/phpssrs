<?php

namespace PhpSsrs\ReportingService2010;

class DisableDataSource
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
  public function __construct($DataSource = null)
  {
    $this->DataSource = $DataSource;
  }

}
