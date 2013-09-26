<?php

namespace PhpSsrs\ReportingService2005;

class FindItems
{

  /**
   * 
   * @var string $Folder
   * @access public
   */
  public $Folder = null;

  /**
   * 
   * @var BooleanOperatorEnum $BooleanOperator
   * @access public
   */
  public $BooleanOperator = null;

  /**
   * 
   * @var SearchCondition[] $Conditions
   * @access public
   */
  public $Conditions = null;

  /**
   * 
   * @param string $Folder
   * @param BooleanOperatorEnum $BooleanOperator
   * @param SearchCondition[] $Conditions
   * @access public
   */
  public function __construct($Folder, $BooleanOperator, $Conditions)
  {
    $this->Folder = $Folder;
    $this->BooleanOperator = $BooleanOperator;
    $this->Conditions = $Conditions;
  }

}
