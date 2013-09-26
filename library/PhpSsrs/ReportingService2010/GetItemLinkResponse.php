<?php

namespace PhpSsrs\ReportingService2010;

class GetItemLinkResponse
{

  /**
   * 
   * @var string $Link
   * @access public
   */
  public $Link = null;

  /**
   * 
   * @param string $Link
   * @access public
   */
  public function __construct($Link)
  {
    $this->Link = $Link;
  }

}
