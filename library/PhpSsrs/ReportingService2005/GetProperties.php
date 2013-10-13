<?php

namespace PhpSsrs\ReportingService2005;

class GetProperties
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
  public function __construct($Item = null, $Properties = null)
  {
    $this->Item = $Item;
    $this->Properties = $Properties;
  }

}
