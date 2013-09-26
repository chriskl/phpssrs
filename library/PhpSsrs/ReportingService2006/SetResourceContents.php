<?php

namespace PhpSsrs\ReportingService2006;

class SetResourceContents
{

  /**
   * 
   * @var string $Resource
   * @access public
   */
  public $Resource = null;

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
   * @param string $Resource
   * @param base64Binary $Contents
   * @param string $MimeType
   * @access public
   */
  public function __construct($Resource, $Contents, $MimeType)
  {
    $this->Resource = $Resource;
    $this->Contents = $Contents;
    $this->MimeType = $MimeType;
  }

}
