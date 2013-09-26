<?php

namespace PhpSsrs\ReportingService2010;

class ListSchedules
{

  /**
   * 
   * @var string $SiteUrl
   * @access public
   */
  public $SiteUrl = null;

  /**
   * 
   * @param string $SiteUrl
   * @access public
   */
  public function __construct($SiteUrl)
  {
    $this->SiteUrl = $SiteUrl;
  }

}
