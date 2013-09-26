<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($Type)
  {
    $this->Type = $Type;
  }

}
