<?php

namespace PhpSsrs\ReportingService2010;

class GetItemTypeResponse
{

  /**
   * 
   * @var string $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @param string $Type
   * @access public
   */
  public function __construct($Type = null)
  {
    $this->Type = $Type;
  }

}
