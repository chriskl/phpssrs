<?php

namespace PhpSsrs\ReportingService2006;

class GetItemTypeResponse
{

  /**
   * 
   * @var ItemTypeEnum $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @param ItemTypeEnum $Type
   * @access public
   */
  public function __construct($Type = null)
  {
    $this->Type = $Type;
  }

}
