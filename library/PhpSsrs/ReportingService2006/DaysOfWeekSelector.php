<?php

namespace PhpSsrs\ReportingService2006;

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
  public function __construct($Sunday = null, $Monday = null, $Tuesday = null, $Wednesday = null, $Thursday = null, $Friday = null, $Saturday = null)
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
