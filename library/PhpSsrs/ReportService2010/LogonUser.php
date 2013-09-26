<?php

namespace PhpSsrs\ReportService2010;

class LogonUser
{

  /**
   * 
   * @var string $userName
   * @access public
   */
  public $userName = null;

  /**
   * 
   * @var string $password
   * @access public
   */
  public $password = null;

  /**
   * 
   * @var string $authority
   * @access public
   */
  public $authority = null;

  /**
   * 
   * @param string $userName
   * @param string $password
   * @param string $authority
   * @access public
   */
  public function __construct($userName, $password, $authority)
  {
    $this->userName = $userName;
    $this->password = $password;
    $this->authority = $authority;
  }

}
