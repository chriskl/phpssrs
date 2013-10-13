<?php

namespace PhpSsrs\ReportingService2010;

class ListTasks
{

  /**
   * 
   * @var string $SecurityScope
   * @access public
   */
  public $SecurityScope = null;

  /**
   * 
   * @param string $SecurityScope
   * @access public
   */
  public function __construct($SecurityScope = null)
  {
    $this->SecurityScope = $SecurityScope;
  }

}
