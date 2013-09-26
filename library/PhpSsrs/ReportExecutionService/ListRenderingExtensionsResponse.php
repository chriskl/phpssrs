<?php

namespace PhpSsrs\ReportExecutionService;

class ListRenderingExtensionsResponse
{

  /**
   * 
   * @var Extension[] $Extensions
   * @access public
   */
  public $Extensions = null;

  /**
   * 
   * @param Extension[] $Extensions
   * @access public
   */
  public function __construct($Extensions)
  {
    $this->Extensions = $Extensions;
  }

}
