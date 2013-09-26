<?php

namespace PhpSsrs\ReportingService2005;

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
   * @param ConditionEnum $Condition
   * @access public
   */
  public function __construct($Condition)
  {
    $this->Condition = $Condition;
  }

}
