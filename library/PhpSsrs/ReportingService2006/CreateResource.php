<?php

namespace PhpSsrs\ReportingService2006;

class CreateResource
{

  /**
   * 
   * @var string $Resource
   * @access public
   */
  public $Resource = null;

  /**
   * 
   * @var string $Parent
   * @access public
   */
  public $Parent = null;

  /**
   * 
   * @var boolean $Overwrite
   * @access public
   */
  public $Overwrite = null;

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
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $Resource
   * @param string $Parent
   * @param boolean $Overwrite
   * @param base64Binary $Contents
   * @param string $MimeType
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($Resource, $Parent, $Overwrite, $Contents, $MimeType, $Properties)
  {
    $this->Resource = $Resource;
    $this->Parent = $Parent;
    $this->Overwrite = $Overwrite;
    $this->Contents = $Contents;
    $this->MimeType = $MimeType;
    $this->Properties = $Properties;
  }

}
