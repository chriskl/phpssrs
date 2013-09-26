<?php

namespace PhpSsrs\ReportService2010;

class CreateCatalogItem
{

  /**
   * 
   * @var string $ItemType
   * @access public
   */
  public $ItemType = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

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
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $ItemType
   * @param string $Name
   * @param string $Parent
   * @param boolean $Overwrite
   * @param base64Binary $Definition
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($ItemType, $Name, $Parent, $Overwrite, $Definition, $Properties)
  {
    $this->ItemType = $ItemType;
    $this->Name = $Name;
    $this->Parent = $Parent;
    $this->Overwrite = $Overwrite;
    $this->Definition = $Definition;
    $this->Properties = $Properties;
  }

}
