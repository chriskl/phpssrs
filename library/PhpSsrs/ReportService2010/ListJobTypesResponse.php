<?php

namespace PhpSsrs\ReportService2010;

class ListJobTypesResponse
{

  /**
   * 
   * @var String1[] $ListJobTypesResult
   * @access public
   */
  public $ListJobTypesResult = null;

  /**
   * 
   * @param String1[] $ListJobTypesResult
   * @access public
   */
  public function __construct($ListJobTypesResult)
  {
    $this->ListJobTypesResult = $ListJobTypesResult;
  }

}
