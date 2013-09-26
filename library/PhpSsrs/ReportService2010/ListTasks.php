<?php

namespace PhpSsrs\ReportService2010;

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
  public function __construct($SecurityScope)
  {
    $this->SecurityScope = $SecurityScope;
  }

}
