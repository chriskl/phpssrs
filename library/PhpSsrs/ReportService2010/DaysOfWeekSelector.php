<?php

namespace PhpSsrs\ReportService2010;

class DaysOfWeekSelector
{

  /**
   * 
   * @var boolean $Sunday
   * @access public
   */
  public $Sunday = null;

  /**
   * 
   * @var boolean $Monday
   * @access public
   */
  public $Monday = null;

  /**
   * 
   * @var boolean $Tuesday
   * @access public
   */
  public $Tuesday = null;

  /**
   * 
   * @var boolean $Wednesday
   * @access public
   */
  public $Wednesday = null;

  /**
   * 
   * @var boolean $Thursday
   * @access public
   */
  public $Thursday = null;

  /**
   * 
   * @var boolean $Friday
   * @access public
   */
  public $Friday = null;

  /**
   * 
   * @var boolean $Saturday
   * @access public
   */
  public $Saturday = null;

  /**
   * 
   * @param boolean $Sunday
   * @param boolean $Monday
   * @param boolean $Tuesday
   * @param boolean $Wednesday
   * @param boolean $Thursday
   * @param boolean $Friday
   * @param boolean $Saturday
   * @access public
   */
  public function __construct($Sunday, $Monday, $Tuesday, $Wednesday, $Thursday, $Friday, $Saturday)
  {
    $this->Sunday = $Sunday;
    $this->Monday = $Monday;
    $this->Tuesday = $Tuesday;
    $this->Wednesday = $Wednesday;
    $this->Thursday = $Thursday;
    $this->Friday = $Friday;
    $this->Saturday = $Saturday;
  }

}
