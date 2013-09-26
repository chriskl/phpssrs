<?php

namespace PhpSsrs\ReportingService2010;

class TestConnectForDataSourceDefinitionResponse
{

  /**
   * 
   * @var boolean $TestConnectForDataSourceDefinitionResult
   * @access public
   */
  public $TestConnectForDataSourceDefinitionResult = null;

  /**
   * 
   * @var string $ConnectError
   * @access public
   */
  public $ConnectError = null;

  /**
   * 
   * @param boolean $TestConnectForDataSourceDefinitionResult
   * @param string $ConnectError
   * @access public
   */
  public function __construct($TestConnectForDataSourceDefinitionResult, $ConnectError)
  {
    $this->TestConnectForDataSourceDefinitionResult = $TestConnectForDataSourceDefinitionResult;
    $this->ConnectError = $ConnectError;
  }

}
