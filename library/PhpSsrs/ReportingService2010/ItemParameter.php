<?php

namespace PhpSsrs\ReportingService2010;

class ItemParameter
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $ParameterTypeName
   * @access public
   */
  public $ParameterTypeName = null;

  /**
   * 
   * @var boolean $Nullable
   * @access public
   */
  public $Nullable = null;

  /**
   * 
   * @var boolean $AllowBlank
   * @access public
   */
  public $AllowBlank = null;

  /**
   * 
   * @var boolean $MultiValue
   * @access public
   */
  public $MultiValue = null;

  /**
   * 
   * @var boolean $QueryParameter
   * @access public
   */
  public $QueryParameter = null;

  /**
   * 
   * @var string $Prompt
   * @access public
   */
  public $Prompt = null;

  /**
   * 
   * @var boolean $PromptUser
   * @access public
   */
  public $PromptUser = null;

  /**
   * 
   * @var String2[] $Dependencies
   * @access public
   */
  public $Dependencies = null;

  /**
   * 
   * @var boolean $ValidValuesQueryBased
   * @access public
   */
  public $ValidValuesQueryBased = null;

  /**
   * 
   * @var ValidValue1[] $ValidValues
   * @access public
   */
  public $ValidValues = null;

  /**
   * 
   * @var boolean $DefaultValuesQueryBased
   * @access public
   */
  public $DefaultValuesQueryBased = null;

  /**
   * 
   * @var String[] $DefaultValues
   * @access public
   */
  public $DefaultValues = null;

  /**
   * 
   * @var string $ParameterStateName
   * @access public
   */
  public $ParameterStateName = null;

  /**
   * 
   * @var string $ErrorMessage
   * @access public
   */
  public $ErrorMessage = null;

  /**
   * 
   * @param string $Name
   * @param string $ParameterTypeName
   * @param boolean $Nullable
   * @param boolean $AllowBlank
   * @param boolean $MultiValue
   * @param boolean $QueryParameter
   * @param string $Prompt
   * @param boolean $PromptUser
   * @param String2[] $Dependencies
   * @param boolean $ValidValuesQueryBased
   * @param ValidValue1[] $ValidValues
   * @param boolean $DefaultValuesQueryBased
   * @param String[] $DefaultValues
   * @param string $ParameterStateName
   * @param string $ErrorMessage
   * @access public
   */
  public function __construct($Name = null, $ParameterTypeName = null, $Nullable = null, $AllowBlank = null, $MultiValue = null, $QueryParameter = null, $Prompt = null, $PromptUser = null, $Dependencies = null, $ValidValuesQueryBased = null, $ValidValues = null, $DefaultValuesQueryBased = null, $DefaultValues = null, $ParameterStateName = null, $ErrorMessage = null)
  {
    $this->Name = $Name;
    $this->ParameterTypeName = $ParameterTypeName;
    $this->Nullable = $Nullable;
    $this->AllowBlank = $AllowBlank;
    $this->MultiValue = $MultiValue;
    $this->QueryParameter = $QueryParameter;
    $this->Prompt = $Prompt;
    $this->PromptUser = $PromptUser;
    $this->Dependencies = $Dependencies;
    $this->ValidValuesQueryBased = $ValidValuesQueryBased;
    $this->ValidValues = $ValidValues;
    $this->DefaultValuesQueryBased = $DefaultValuesQueryBased;
    $this->DefaultValues = $DefaultValues;
    $this->ParameterStateName = $ParameterStateName;
    $this->ErrorMessage = $ErrorMessage;
  }

}
