<?php

namespace PhpSsrs\ReportingService2010;

class SetProperties
{

  /**
   * 
   * @var string $ItemPath
   * @access public
   */
  public $ItemPath = null;

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $ItemPath
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($ItemPath, $Properties)
  {
    $this->ItemPath = $ItemPath;
    $this->Properties = $Properties;
  }

}
