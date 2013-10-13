<?php

namespace PhpSsrs\ReportingService2010;

class TestConnectForItemDataSourceResponse
{

  /**
   * 
   * @var boolean $TestConnectForItemDataSourceResult
   * @access public
   */
  public $TestConnectForItemDataSourceResult = null;

  /**
   * 
   * @var string $ConnectError
   * @access public
   */
  public $ConnectError = null;

  /**
   * 
   * @param boolean $TestConnectForItemDataSourceResult
   * @param string $ConnectError
   * @access public
   */
  public function __construct($TestConnectForItemDataSourceResult = null, $ConnectError = null)
  {
    $this->TestConnectForItemDataSourceResult = $TestConnectForItemDataSourceResult;
    $this->ConnectError = $ConnectError;
  }

}
