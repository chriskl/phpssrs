<?php

namespace PhpSsrs\ReportingService2006;

class CancelJob
{

  /**
   * 
   * @var string $JobID
   * @access public
   */
  public $JobID = null;

  /**
   * 
   * @param string $JobID
   * @access public
   */
  public function __construct($JobID = null)
  {
    $this->JobID = $JobID;
  }

}
