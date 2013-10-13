<?php

namespace PhpSsrs\ReportingService2010;

class ExtensionParameter
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $DisplayName
   * @access public
   */
  public $DisplayName = null;

  /**
   * 
   * @var boolean $Required
   * @access public
   */
  public $Required = null;

  /**
   * 
   * @var boolean $ReadOnly
   * @access public
   */
  public $ReadOnly = null;

  /**
   * 
   * @var string $Value
   * @access public
   */
  public $Value = null;

  /**
   * 
   * @var string $Error
   * @access public
   */
  public $Error = null;

  /**
   * 
   * @var boolean $Encrypted
   * @access public
   */
  public $Encrypted = null;

  /**
   * 
   * @var boolean $IsPassword
   * @access public
   */
  public $IsPassword = null;

  /**
   * 
   * @var ValidValue[] $ValidValues
   * @access public
   */
  public $ValidValues = null;

  /**
   * 
   * @param string $Name
   * @param string $DisplayName
   * @param boolean $Required
   * @param boolean $ReadOnly
   * @param string $Value
   * @param string $Error
   * @param boolean $Encrypted
   * @param boolean $IsPassword
   * @param ValidValue[] $ValidValues
   * @access public
   */
  public function __construct($Name = null, $DisplayName = null, $Required = null, $ReadOnly = null, $Value = null, $Error = null, $Encrypted = null, $IsPassword = null, $ValidValues = null)
  {
    $this->Name = $Name;
    $this->DisplayName = $DisplayName;
    $this->Required = $Required;
    $this->ReadOnly = $ReadOnly;
    $this->Value = $Value;
    $this->Error = $Error;
    $this->Encrypted = $Encrypted;
    $this->IsPassword = $IsPassword;
    $this->ValidValues = $ValidValues;
  }

}
