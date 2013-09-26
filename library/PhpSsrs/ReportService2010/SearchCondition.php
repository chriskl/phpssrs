<?php

namespace PhpSsrs\ReportService2010;

class SearchCondition
{

  /**
   * 
   * @var ConditionEnum $Condition
   * @access public
   */
  public $Condition = null;

  /**
   * 
   * @var String[] $Values
   * @access public
   */
  public $Values = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @param ConditionEnum $Condition
   * @param String[] $Values
   * @param string $Name
   * @access public
   */
  public function __construct($Condition, $Values, $Name)
  {
    $this->Condition = $Condition;
    $this->Values = $Values;
    $this->Name = $Name;
  }

}
