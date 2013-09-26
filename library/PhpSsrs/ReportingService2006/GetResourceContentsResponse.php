<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Contents, $MimeType)
  {
    $this->Contents = $Contents;
    $this->MimeType = $MimeType;
  }

}
