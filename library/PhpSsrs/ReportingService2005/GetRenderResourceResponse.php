<?php

namespace PhpSsrs\ReportingService2005;

class GetRenderResourceResponse
{

  /**
   * 
   * @var base64Binary $Result
   * @access public
   */
  public $Result = null;

  /**
   * 
   * @var string $MimeType
   * @access public
   */
  public $MimeType = null;

  /**
   * 
   * @param base64Binary $Result
   * @param string $MimeType
   * @access public
   */
  public function __construct($Result = null, $MimeType = null)
  {
    $this->Result = $Result;
    $this->MimeType = $MimeType;
  }

}
