<?php

namespace PhpSsrs\ReportingService2010;

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
  public function __construct($Tasks = null)
  {
    $this->Tasks = $Tasks;
  }

}
