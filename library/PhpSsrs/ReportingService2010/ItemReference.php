<?php

namespace PhpSsrs\ReportingService2010;

class ItemReference
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Reference
   * @access public
   */
  public $Reference = null;

  /**
   * 
   * @param string $Name
   * @param string $Reference
   * @access public
   */
  public function __construct($Name = null, $Reference = null)
  {
    $this->Name = $Name;
    $this->Reference = $Reference;
  }

}
