<?php

namespace PhpSsrs\ReportingService2010;

class GetRolePropertiesResponse
{

  /**
   * 
   * @var String1[] $TaskIDs
   * @access public
   */
  public $TaskIDs = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @param String1[] $TaskIDs
   * @param string $Description
   * @access public
   */
  public function __construct($TaskIDs = null, $Description = null)
  {
    $this->TaskIDs = $TaskIDs;
    $this->Description = $Description;
  }

}
