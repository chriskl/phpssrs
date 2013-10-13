<?php

namespace PhpSsrs\ReportingService2005;

class QueryDefinition
{

  /**
   * 
   * @var string $CommandType
   * @access public
   */
  public $CommandType = null;

  /**
   * 
   * @var string $CommandText
   * @access public
   */
  public $CommandText = null;

  /**
   * 
   * @var int $Timeout
   * @access public
   */
  public $Timeout = null;

  /**
   * 
   * @param string $CommandType
   * @param string $CommandText
   * @param int $Timeout
   * @access public
   */
  public function __construct($CommandType = null, $CommandText = null, $Timeout = null)
  {
    $this->CommandType = $CommandType;
    $this->CommandText = $CommandText;
    $this->Timeout = $Timeout;
  }

}
