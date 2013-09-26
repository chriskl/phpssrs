<?php

namespace PhpSsrs\ReportingService2005;

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
