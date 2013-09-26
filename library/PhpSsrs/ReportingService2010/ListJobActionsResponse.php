<?php

namespace PhpSsrs\ReportingService2010;

class ListJobActionsResponse
{

  /**
   * 
   * @var String1[] $ListJobActionsResult
   * @access public
   */
  public $ListJobActionsResult = null;

  /**
   * 
   * @param String1[] $ListJobActionsResult
   * @access public
   */
  public function __construct($ListJobActionsResult)
  {
    $this->ListJobActionsResult = $ListJobActionsResult;
  }

}
