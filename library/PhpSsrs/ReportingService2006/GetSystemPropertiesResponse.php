<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Values = null)
  {
    $this->Values = $Values;
  }

}
