<?php

namespace PhpSsrs\ReportingService2010;

class GetRoleProperties
{

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $SiteUrl
   * @access public
   */
  public $SiteUrl = null;

  /**
   * 
   * @param string $Name
   * @param string $SiteUrl
   * @access public
   */
  public function __construct($Name = null, $SiteUrl = null)
  {
    $this->Name = $Name;
    $this->SiteUrl = $SiteUrl;
  }

}
