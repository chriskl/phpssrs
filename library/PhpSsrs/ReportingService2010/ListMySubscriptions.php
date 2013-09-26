<?php

namespace PhpSsrs\ReportingService2010;

class ListMySubscriptions
{

  /**
   * 
   * @var string $ItemPathOrSiteURL
   * @access public
   */
  public $ItemPathOrSiteURL = null;

  /**
   * 
   * @param string $ItemPathOrSiteURL
   * @access public
   */
  public function __construct($ItemPathOrSiteURL)
  {
    $this->ItemPathOrSiteURL = $ItemPathOrSiteURL;
  }

}
