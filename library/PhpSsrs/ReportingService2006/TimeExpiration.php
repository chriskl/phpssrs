<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Minutes)
  {
    $this->Minutes = $Minutes;
  }

}
