<?php

namespace PhpSsrs\ReportingService2006;

class ListAllSubscriptions
{

  /**
   * 
   * @var string $Site
   * @access public
   */
  public $Site = null;

  /**
   * 
   * @param string $Site
   * @access public
   */
  public function __construct($Site = null)
  {
    $this->Site = $Site;
  }

}
