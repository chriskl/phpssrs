<?php

namespace PhpSsrs\ReportingService2010;

class DataSourceReference
{

  /**
   * 
   * @var string $Reference
   * @access public
   */
  public $Reference = null;

  /**
   * 
   * @param string $Reference
   * @access public
   */
  public function __construct($Reference = null)
  {
    $this->Reference = $Reference;
  }

}
