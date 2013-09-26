<?php

namespace PhpSsrs\ReportService2010;

class Extension
{

  /**
   * 
   * @var string $ExtensionTypeName
   * @access public
   */
  public $ExtensionTypeName = null;

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
   * @param string $ExtensionTypeName
   * @param string $Name
   * @param string $LocalizedName
   * @param boolean $Visible
   * @param boolean $IsModelGenerationSupported
   * @access public
   */
  public function __construct($ExtensionTypeName, $Name, $LocalizedName, $Visible, $IsModelGenerationSupported)
  {
    $this->ExtensionTypeName = $ExtensionTypeName;
    $this->Name = $Name;
    $this->LocalizedName = $LocalizedName;
    $this->Visible = $Visible;
    $this->IsModelGenerationSupported = $IsModelGenerationSupported;
  }

}
