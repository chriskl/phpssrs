<?php

namespace PhpSsrs\ReportingService2010;

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
   * @var Property[] $SearchOptions
   * @access public
   */
  public $SearchOptions = null;

  /**
   * 
   * @var SearchCondition[] $SearchConditions
   * @access public
   */
  public $SearchConditions = null;

  /**
   * 
   * @param string $Folder
   * @param BooleanOperatorEnum $BooleanOperator
   * @param Property[] $SearchOptions
   * @param SearchCondition[] $SearchConditions
   * @access public
   */
  public function __construct($Folder = null, $BooleanOperator = null, $SearchOptions = null, $SearchConditions = null)
  {
    $this->Folder = $Folder;
    $this->BooleanOperator = $BooleanOperator;
    $this->SearchOptions = $SearchOptions;
    $this->SearchConditions = $SearchConditions;
  }

}
