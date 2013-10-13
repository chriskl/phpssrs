<?php

namespace PhpSsrs\ReportExecutionService;

class SetExecutionCredentials2
{

  /**
   * 
   * @var DataSourceCredentials[] $Credentials
   * @access public
   */
  public $Credentials = null;

  /**
   * 
   * @param DataSourceCredentials[] $Credentials
   * @access public
   */
  public function __construct($Credentials = null)
  {
    $this->Credentials = $Credentials;
  }

}
