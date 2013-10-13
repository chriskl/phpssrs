<?php

namespace PhpSsrs\ReportExecutionService;

class Warning
{

  /**
   * 
   * @var string $Code
   * @access public
   */
  public $Code = null;

  /**
   * 
   * @var string $Severity
   * @access public
   */
  public $Severity = null;

  /**
   * 
   * @var string $ObjectName
   * @access public
   */
  public $ObjectName = null;

  /**
   * 
   * @var string $ObjectType
   * @access public
   */
  public $ObjectType = null;

  /**
   * 
   * @var string $Message
   * @access public
   */
  public $Message = null;

  /**
   * 
   * @param string $Code
   * @param string $Severity
   * @param string $ObjectName
   * @param string $ObjectType
   * @param string $Message
   * @access public
   */
  public function __construct($Code = null, $Severity = null, $ObjectName = null, $ObjectType = null, $Message = null)
  {
    $this->Code = $Code;
    $this->Severity = $Severity;
    $this->ObjectName = $ObjectName;
    $this->ObjectType = $ObjectType;
    $this->Message = $Message;
  }

}
