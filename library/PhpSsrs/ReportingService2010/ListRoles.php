<?php

namespace PhpSsrs\ReportingService2010;

class ListRoles
{

  /**
   * 
   * @var string $SecurityScope
   * @access public
   */
  public $SecurityScope = null;

  /**
   * 
   * @var string $SiteUrl
   * @access public
   */
  public $SiteUrl = null;

  /**
   * 
   * @param string $SecurityScope
   * @param string $SiteUrl
   * @access public
   */
  public function __construct($SecurityScope = null, $SiteUrl = null)
  {
    $this->SecurityScope = $SecurityScope;
    $this->SiteUrl = $SiteUrl;
  }

}
