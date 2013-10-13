<?php

namespace PhpSsrs\ReportingService2010;

class TimeExpiration
{

  /**
   * 
   * @var int $Minutes
   * @access public
   */
  public $Minutes = null;

  /**
   * 
   * @param int $Minutes
   * @access public
   */
  public function __construct($Minutes = null)
  {
    $this->Minutes = $Minutes;
  }

}
