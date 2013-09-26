<?php

namespace PhpSsrs\ReportService2010;

class MonthsOfYearSelector
{

  /**
   * 
   * @var boolean $January
   * @access public
   */
  public $January = null;

  /**
   * 
   * @var boolean $February
   * @access public
   */
  public $February = null;

  /**
   * 
   * @var boolean $March
   * @access public
   */
  public $March = null;

  /**
   * 
   * @var boolean $April
   * @access public
   */
  public $April = null;

  /**
   * 
   * @var boolean $May
   * @access public
   */
  public $May = null;

  /**
   * 
   * @var boolean $June
   * @access public
   */
  public $June = null;

  /**
   * 
   * @var boolean $July
   * @access public
   */
  public $July = null;

  /**
   * 
   * @var boolean $August
   * @access public
   */
  public $August = null;

  /**
   * 
   * @var boolean $September
   * @access public
   */
  public $September = null;

  /**
   * 
   * @var boolean $October
   * @access public
   */
  public $October = null;

  /**
   * 
   * @var boolean $November
   * @access public
   */
  public $November = null;

  /**
   * 
   * @var boolean $December
   * @access public
   */
  public $December = null;

  /**
   * 
   * @param boolean $January
   * @param boolean $February
   * @param boolean $March
   * @param boolean $April
   * @param boolean $May
   * @param boolean $June
   * @param boolean $July
   * @param boolean $August
   * @param boolean $September
   * @param boolean $October
   * @param boolean $November
   * @param boolean $December
   * @access public
   */
  public function __construct($January, $February, $March, $April, $May, $June, $July, $August, $September, $October, $November, $December)
  {
    $this->January = $January;
    $this->February = $February;
    $this->March = $March;
    $this->April = $April;
    $this->May = $May;
    $this->June = $June;
    $this->July = $July;
    $this->August = $August;
    $this->September = $September;
    $this->October = $October;
    $this->November = $November;
    $this->December = $December;
  }

}
