<?php

namespace PhpSsrs\ReportExecutionService;

class DataSourceCredentials
{

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
   * @param string $DataSourceName
   * @param string $UserName
   * @param string $Password
   * @access public
   */
  public function __construct($DataSourceName, $UserName, $Password)
  {
    $this->DataSourceName = $DataSourceName;
    $this->UserName = $UserName;
    $this->Password = $Password;
  }

}
