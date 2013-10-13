<?php

namespace PhpSsrs\ReportingService2005;

class EnableDataSource
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
