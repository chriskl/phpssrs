<?php

namespace PhpSsrs\ReportingService2005;

class GetModelDefinitionResponse
{

  /**
   * 
   * @var base64Binary $Definition
   * @access public
   */
  public $Definition = null;

  /**
   * 
   * @param base64Binary $Definition
   * @access public
   */
  public function __construct($Definition = null)
  {
    $this->Definition = $Definition;
  }

}
