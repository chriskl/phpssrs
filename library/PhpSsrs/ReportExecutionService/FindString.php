<?php

namespace PhpSsrs\ReportExecutionService;

class FindString
{

  /**
   * 
   * @var int $StartPage
   * @access public
   */
  public $StartPage = null;

  /**
   * 
   * @var int $EndPage
   * @access public
   */
  public $EndPage = null;

  /**
   * 
   * @var string $FindValue
   * @access public
   */
  public $FindValue = null;

  /**
   * 
   * @param int $StartPage
   * @param int $EndPage
   * @param string $FindValue
   * @access public
   */
  public function __construct($StartPage, $EndPage, $FindValue)
  {
    $this->StartPage = $StartPage;
    $this->EndPage = $EndPage;
    $this->FindValue = $FindValue;
  }

}
