<?php

namespace PhpSsrs\ReportingService2005;

class ParameterFieldReference
{

  /**
   * 
   * @var string $ParameterName
   * @access public
   */
  public $ParameterName = null;

  /**
   * 
   * @var string $FieldAlias
   * @access public
   */
  public $FieldAlias = null;

  /**
   * 
   * @param string $ParameterName
   * @param string $FieldAlias
   * @access public
   */
  public function __construct($ParameterName, $FieldAlias)
  {
    $this->ParameterName = $ParameterName;
    $this->FieldAlias = $FieldAlias;
  }

}
