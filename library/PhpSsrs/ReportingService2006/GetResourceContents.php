<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Resource = null)
  {
    $this->Resource = $Resource;
  }

}
