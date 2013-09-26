<?php

namespace PhpSsrs\ReportingService2005;

class ListRoles
{

  /**
   * 
   * @var SecurityScopeEnum $SecurityScope
   * @access public
   */
  public $SecurityScope = null;

  /**
   * 
   * @param SecurityScopeEnum $SecurityScope
   * @access public
   */
  public function __construct($SecurityScope)
  {
    $this->SecurityScope = $SecurityScope;
  }

}
