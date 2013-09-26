<?php

namespace PhpSsrs\ReportingService2010;

class CancelJobResponse
{

  /**
   * 
   * @var boolean $CancelJobResult
   * @access public
   */
  public $CancelJobResult = null;

  /**
   * 
   * @param boolean $CancelJobResult
   * @access public
   */
  public function __construct($CancelJobResult)
  {
    $this->CancelJobResult = $CancelJobResult;
  }

}
