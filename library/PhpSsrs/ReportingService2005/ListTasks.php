<?php

namespace PhpSsrs\ReportingService2005;

class ListTasks
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
  public function __construct($SecurityScope = null)
  {
    $this->SecurityScope = $SecurityScope;
  }

}
