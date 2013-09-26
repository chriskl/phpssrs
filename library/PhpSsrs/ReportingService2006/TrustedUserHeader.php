<?php

namespace PhpSsrs\ReportingService2006;

class TrustedUserHeader
{

  /**
   * 
   * @var string $UserName
   * @access public
   */
  public $UserName = null;

  /**
   * 
   * @var base64Binary $UserToken
   * @access public
   */
  public $UserToken = null;

  /**
   * 
   * @param string $UserName
   * @param base64Binary $UserToken
   * @access public
   */
  public function __construct($UserName, $UserToken)
  {
    $this->UserName = $UserName;
    $this->UserToken = $UserToken;
  }

}
