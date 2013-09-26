<?php

namespace PhpSsrs\ReportingService2010;

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
   * @var string $ModelItemTypeName
   * @access public
   */
  public $ModelItemTypeName = null;

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
   * @param string $ModelItemTypeName
   * @param string $Description
   * @param ModelItem[] $ModelItems
   * @access public
   */
  public function __construct($ID, $Name, $ModelItemTypeName, $Description, $ModelItems)
  {
    $this->ID = $ID;
    $this->Name = $Name;
    $this->ModelItemTypeName = $ModelItemTypeName;
    $this->Description = $Description;
    $this->ModelItems = $ModelItems;
  }

}
