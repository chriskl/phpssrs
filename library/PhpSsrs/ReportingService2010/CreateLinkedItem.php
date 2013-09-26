<?php

namespace PhpSsrs\ReportingService2010;

class CreateLinkedItem
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var string $Parent
   * @access public
   */
  public $Parent = null;

  /**
   * 
   * @var string $Link
   * @access public
   */
  public $Link = null;

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $ItemPath
   * @param string $Parent
   * @param string $Link
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($ItemPath, $Parent, $Link, $Properties)
  {
    $this->ItemPath = $ItemPath;
    $this->Parent = $Parent;
    $this->Link = $Link;
    $this->Properties = $Properties;
  }

}
