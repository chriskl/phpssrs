<?php

namespace PhpSsrs\ReportingService2006;

class RemoveAllModelItemPolicies
{

  /**
   * 
   * @var string $Model
   * @access public
   */
  public $Model = null;

  /**
   * 
   * @param string $Model
   * @access public
   */
  public function __construct($Model = null)
  {
    $this->Model = $Model;
  }

}
