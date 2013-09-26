<?php

namespace PhpSsrs\ReportExecutionService;

class SetExecutionCredentials
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
  public function __construct($Credentials)
  {
    $this->Credentials = $Credentials;
  }

}
