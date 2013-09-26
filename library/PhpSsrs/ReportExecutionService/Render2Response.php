<?php

namespace PhpSsrs\ReportExecutionService;

class Render2Response
{

  /**
   * 
   * @var base64Binary $Result
   * @access public
   */
  public $Result = null;

  /**
   * 
   * @var string $Extension
   * @access public
   */
  public $Extension = null;

  /**
   * 
   * @var string $MimeType
   * @access public
   */
  public $MimeType = null;

  /**
   * 
   * @var string $Encoding
   * @access public
   */
  public $Encoding = null;

  /**
   * 
   * @var Warning[] $Warnings
   * @access public
   */
  public $Warnings = null;

  /**
   * 
   * @var String[] $StreamIds
   * @access public
   */
  public $StreamIds = null;

  /**
   * 
   * @param base64Binary $Result
   * @param string $Extension
   * @param string $MimeType
   * @param string $Encoding
   * @param Warning[] $Warnings
   * @param String[] $StreamIds
   * @access public
   */
  public function __construct($Result, $Extension, $MimeType, $Encoding, $Warnings, $StreamIds)
  {
    $this->Result = $Result;
    $this->Extension = $Extension;
    $this->MimeType = $MimeType;
    $this->Encoding = $Encoding;
    $this->Warnings = $Warnings;
    $this->StreamIds = $StreamIds;
  }

}
