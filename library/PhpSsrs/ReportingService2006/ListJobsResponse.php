<?php

namespace PhpSsrs\ReportingService2006;

class ListJobsResponse
{

  /**
   * 
   * @var Job[] $Jobs
   * @access public
   */
  public $Jobs = null;

  /**
   * 
   * @param Job[] $Jobs
   * @access public
   */
  public function __construct($Jobs = null)
  {
    $this->Jobs = $Jobs;
  }

}
