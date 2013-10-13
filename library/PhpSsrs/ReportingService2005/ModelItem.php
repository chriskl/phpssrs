<?php

namespace PhpSsrs\ReportingService2005;

class ModelItem
{

  /**
   * 
   * @var string $ID
   * @access public
   */
  public $ID = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var ModelItemTypeEnum $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var ModelItem[] $ModelItems
   * @access public
   */
  public $ModelItems = null;

  /**
   * 
   * @param string $ID
   * @param string $Name
   * @param ModelItemTypeEnum $Type
   * @param string $Description
   * @param ModelItem[] $ModelItems
   * @access public
   */
  public function __construct($ID = null, $Name = null, $Type = null, $Description = null, $ModelItems = null)
  {
    $this->ID = $ID;
    $this->Name = $Name;
    $this->Type = $Type;
    $this->Description = $Description;
    $this->ModelItems = $ModelItems;
  }

}
