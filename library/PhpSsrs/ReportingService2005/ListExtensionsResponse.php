<?php

namespace PhpSsrs\ReportingService2005;

class ListExtensionsResponse
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
