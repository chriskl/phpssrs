<?php

namespace PhpSsrs\ReportingService2010;

class ListSubscriptions
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
  public function __construct($ItemPathOrSiteURL = null)
  {
    $this->ItemPathOrSiteURL = $ItemPathOrSiteURL;
  }

}
