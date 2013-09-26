<?php

namespace PhpSsrs\ReportService2010;

class GetItemParametersResponse
{

  /**
   * 
   * @var ItemParameter[] $Parameters
   * @access public
   */
  public $Parameters = null;

  /**
   * 
   * @param ItemParameter[] $Parameters
   * @access public
   */
  public function __construct($Parameters)
  {
    $this->Parameters = $Parameters;
  }

}
