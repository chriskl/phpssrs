<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($DataSource)
  {
    $this->DataSource = $DataSource;
  }

}
