<?php

namespace PhpSsrs\ReportingService2006;

class ReportParameter
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var ParameterTypeEnum $Type
   * @access public
   */
  public $Type = null;

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
   * @var String1[] $Dependencies
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
   * @var ValidValue[] $ValidValues
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
   * @var String2[] $DefaultValues
   * @access public
   */
  public $DefaultValues = null;

  /**
   * 
   * @var ParameterStateEnum $State
   * @access public
   */
  public $State = null;

  /**
   * 
   * @var string $ErrorMessage
   * @access public
   */
  public $ErrorMessage = null;

  /**
   * 
   * @param string $Name
   * @param ParameterTypeEnum $Type
   * @param boolean $Nullable
   * @param boolean $AllowBlank
   * @param boolean $MultiValue
   * @param boolean $QueryParameter
   * @param string $Prompt
   * @param boolean $PromptUser
   * @param String1[] $Dependencies
   * @param boolean $ValidValuesQueryBased
   * @param ValidValue[] $ValidValues
   * @param boolean $DefaultValuesQueryBased
   * @param String2[] $DefaultValues
   * @param ParameterStateEnum $State
   * @param string $ErrorMessage
   * @access public
   */
  public function __construct($Name = null, $Type = null, $Nullable = null, $AllowBlank = null, $MultiValue = null, $QueryParameter = null, $Prompt = null, $PromptUser = null, $Dependencies = null, $ValidValuesQueryBased = null, $ValidValues = null, $DefaultValuesQueryBased = null, $DefaultValues = null, $State = null, $ErrorMessage = null)
  {
    $this->Name = $Name;
    $this->Type = $Type;
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
    $this->State = $State;
    $this->ErrorMessage = $ErrorMessage;
  }

}
