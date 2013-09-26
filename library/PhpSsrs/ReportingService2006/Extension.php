<?php

namespace PhpSsrs\ReportingService2006;

class Extension
{

  /**
   * 
   * @var ExtensionTypeEnum $ExtensionType
   * @access public
   */
  public $ExtensionType = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $LocalizedName
   * @access public
   */
  public $LocalizedName = null;

  /**
   * 
   * @var boolean $Visible
   * @access public
   */
  public $Visible = null;

  /**
   * 
   * @var boolean $IsModelGenerationSupported
   * @access public
   */
  public $IsModelGenerationSupported = null;

  /**
   * 
   * @param ExtensionTypeEnum $ExtensionType
   * @param string $Name
   * @param string $LocalizedName
   * @param boolean $Visible
   * @param boolean $IsModelGenerationSupported
   * @access public
   */
  public function __construct($ExtensionType, $Name, $LocalizedName, $Visible, $IsModelGenerationSupported)
  {
    $this->ExtensionType = $ExtensionType;
    $this->Name = $Name;
    $this->LocalizedName = $LocalizedName;
    $this->Visible = $Visible;
    $this->IsModelGenerationSupported = $IsModelGenerationSupported;
  }

}
