<?php

namespace PhpSsrs\ReportingService2006;

class ListEventsResponse
{

  /**
   * 
   * @var Event[] $Events
   * @access public
   */
  public $Events = null;

  /**
   * 
   * @param Event[] $Events
   * @access public
   */
  public function __construct($Events = null)
  {
    $this->Events = $Events;
  }

}
