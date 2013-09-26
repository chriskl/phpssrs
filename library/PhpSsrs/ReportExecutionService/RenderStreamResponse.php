<?php

namespace PhpSsrs\ReportExecutionService;

class RenderStreamResponse
{

  /**
   * 
   * @var base64Binary $Result
   * @access public
   */
  public $Result = null;

  /**
   * 
   * @var string $Encoding
   * @access public
   */
  public $Encoding = null;

  /**
   * 
   * @var string $MimeType
   * @access public
   */
  public $MimeType = null;

  /**
   * 
   * @param base64Binary $Result
   * @param string $Encoding
   * @param string $MimeType
   * @access public
   */
  public function __construct($Result, $Encoding, $MimeType)
  {
    $this->Result = $Result;
    $this->Encoding = $Encoding;
    $this->MimeType = $MimeType;
  }

}
