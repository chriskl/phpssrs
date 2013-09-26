<?php

namespace PhpSsrs\ReportingService2005;

class CreateBatchResponse
{

  /**
   * 
   * @var string $BatchID
   * @access public
   */
  public $BatchID = null;

  /**
   * 
   * @param string $BatchID
   * @access public
   */
  public function __construct($BatchID)
  {
    $this->BatchID = $BatchID;
  }

}
