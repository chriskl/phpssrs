<?php

namespace PhpSsrs\ReportService2010;

class GetSystemPropertiesResponse
{

  /**
   * 
   * @var Property[] $Values
   * @access public
   */
  public $Values = null;

  /**
   * 
   * @param Property[] $Values
   * @access public
   */
  public function __construct($Values)
  {
    $this->Values = $Values;
  }

}
