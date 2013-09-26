<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($Name, $DisplayName, $Required, $ReadOnly, $Value, $Error, $Encrypted, $IsPassword, $ValidValues)
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
