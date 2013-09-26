<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($Folder, $BooleanOperator, $SearchOptions, $SearchConditions)
  {
    $this->Folder = $Folder;
    $this->BooleanOperator = $BooleanOperator;
    $this->SearchOptions = $SearchOptions;
    $this->SearchConditions = $SearchConditions;
  }

}
