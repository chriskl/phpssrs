<?php

namespace PhpSsrs\ReportingService2006;

class DataSetDefinition
{

  /**
   * 
   * @var Field[] $Fields
   * @access public
   */
  public $Fields = null;

  /**
   * 
   * @var QueryDefinition $Query
   * @access public
   */
  public $Query = null;

  /**
   * 
   * @var SensitivityEnum $CaseSensitivity
   * @access public
   */
  public $CaseSensitivity = null;

  /**
   * 
   * @var string $Collation
   * @access public
   */
  public $Collation = null;

  /**
   * 
   * @var SensitivityEnum $AccentSensitivity
   * @access public
   */
  public $AccentSensitivity = null;

  /**
   * 
   * @var SensitivityEnum $KanatypeSensitivity
   * @access public
   */
  public $KanatypeSensitivity = null;

  /**
   * 
   * @var SensitivityEnum $WidthSensitivity
   * @access public
   */
  public $WidthSensitivity = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @param Field[] $Fields
   * @param QueryDefinition $Query
   * @param SensitivityEnum $CaseSensitivity
   * @param string $Collation
   * @param SensitivityEnum $AccentSensitivity
   * @param SensitivityEnum $KanatypeSensitivity
   * @param SensitivityEnum $WidthSensitivity
   * @param string $Name
   * @access public
   */
  public function __construct($Fields = null, $Query = null, $CaseSensitivity = null, $Collation = null, $AccentSensitivity = null, $KanatypeSensitivity = null, $WidthSensitivity = null, $Name = null)
  {
    $this->Fields = $Fields;
    $this->Query = $Query;
    $this->CaseSensitivity = $CaseSensitivity;
    $this->Collation = $Collation;
    $this->AccentSensitivity = $AccentSensitivity;
    $this->KanatypeSensitivity = $KanatypeSensitivity;
    $this->WidthSensitivity = $WidthSensitivity;
    $this->Name = $Name;
  }

}
