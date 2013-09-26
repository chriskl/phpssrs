<?php

namespace PhpSsrs\ReportingService2005;

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
  public function __construct($Jobs)
  {
    $this->Jobs = $Jobs;
  }

}
