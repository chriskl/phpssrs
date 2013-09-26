<?php

namespace PhpSsrs\ReportingService2010;

class TestConnectForItemDataSource
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $DataSourceName
   * @access public
   */
  public $DataSourceName = null;

  /**
   * 
   * @var string $UserName
   * @access public
   */
  public $UserName = null;

  /**
   * 
   * @var string $Password
   * @access public
   */
  public $Password = null;

  /**
   * 
   * @param string $ItemPath
   * @param string $DataSourceName
   * @param string $UserName
   * @param string $Password
   * @access public
   */
  public function __construct($ItemPath, $DataSourceName, $UserName, $Password)
  {
    $this->ItemPath = $ItemPath;
    $this->DataSourceName = $DataSourceName;
    $this->UserName = $UserName;
    $this->Password = $Password;
  }

}
