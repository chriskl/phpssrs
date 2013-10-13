<?php

namespace PhpSsrs\ReportingService2005;

class GetResourceContentsResponse
{

  /**
   * 
   * @var base64Binary $Contents
   * @access public
   */
  public $Contents = null;

  /**
   * 
   * @var string $MimeType
   * @access public
   */
  public $MimeType = null;

  /**
   * 
   * @param base64Binary $Contents
   * @param string $MimeType
   * @access public
   */
  public function __construct($Contents = null, $MimeType = null)
  {
    $this->Contents = $Contents;
    $this->MimeType = $MimeType;
  }

}
