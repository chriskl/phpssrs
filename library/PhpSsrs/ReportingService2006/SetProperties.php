<?php

namespace PhpSsrs\ReportingService2006;

class SetProperties
{

  /**
   * 
   * @var string $Item
   * @access public
   */
  public $Item = null;

  /**
   * 
   * @var Property[] $Properties
   * @access public
   */
  public $Properties = null;

  /**
   * 
   * @param string $Item
   * @param Property[] $Properties
   * @access public
   */
  public function __construct($Item, $Properties)
  {
    $this->Item = $Item;
    $this->Properties = $Properties;
  }

}
