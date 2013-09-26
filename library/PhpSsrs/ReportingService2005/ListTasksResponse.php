<?php

namespace PhpSsrs\ReportingService2005;

class ListTasksResponse
{

  /**
   * 
   * @var Task[] $Tasks
   * @access public
   */
  public $Tasks = null;

  /**
   * 
   * @param Task[] $Tasks
   * @access public
   */
  public function __construct($Tasks)
  {
    $this->Tasks = $Tasks;
  }

}
