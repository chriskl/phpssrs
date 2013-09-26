<?php

namespace PhpSsrs\ReportingService2010;

class ListJobStatesResponse
{

  /**
   * 
   * @var String1[] $ListJobStatesResult
   * @access public
   */
  public $ListJobStatesResult = null;

  /**
   * 
   * @param String1[] $ListJobStatesResult
   * @access public
   */
  public function __construct($ListJobStatesResult)
  {
    $this->ListJobStatesResult = $ListJobStatesResult;
  }

}
