<?php

namespace PhpSsrs\ReportingService2005;

class GetResourceContents
{

  /**
   * 
   * @var string $Resource
   * @access public
   */
  public $Resource = null;

  /**
   * 
   * @param string $Resource
   * @access public
   */
  public function __construct($Resource)
  {
    $this->Resource = $Resource;
  }

}
