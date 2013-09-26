<?php

namespace PhpSsrs\ReportingService2006;

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
   * @var string $Path
   * @access public
   */
  public $Path = null;

  /**
   * 
   * @param SecurityScopeEnum $SecurityScope
   * @param string $Path
   * @access public
   */
  public function __construct($SecurityScope, $Path)
  {
    $this->SecurityScope = $SecurityScope;
    $this->Path = $Path;
  }

}
