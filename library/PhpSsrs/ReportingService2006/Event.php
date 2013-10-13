<?php

namespace PhpSsrs\ReportingService2006;

class Event
{

  /**
   * 
   * @var string $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @param string $Type
   * @access public
   */
  public function __construct($Type = null)
  {
    $this->Type = $Type;
  }

}
