<?php

namespace PhpSsrs\ReportingService2005;

class ListSubscriptions
{

  /**
   * 
   * @var string $Report
   * @access public
   */
  public $Report = null;

  /**
   * 
   * @var string $Owner
   * @access public
   */
  public $Owner = null;

  /**
   * 
   * @param string $Report
   * @param string $Owner
   * @access public
   */
  public function __construct($Report = null, $Owner = null)
  {
    $this->Report = $Report;
    $this->Owner = $Owner;
  }

}
