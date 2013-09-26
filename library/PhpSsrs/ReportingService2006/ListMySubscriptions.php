<?php

namespace PhpSsrs\ReportingService2006;

class ListMySubscriptions
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
  public function __construct($Site)
  {
    $this->Site = $Site;
  }

}
