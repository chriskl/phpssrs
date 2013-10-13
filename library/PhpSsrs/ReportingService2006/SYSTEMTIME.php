<?php

namespace PhpSsrs\ReportingService2006;

class SYSTEMTIME
{

  /**
   * 
   * @var int $year
   * @access public
   */
  public $year = null;

  /**
   * 
   * @var int $month
   * @access public
   */
  public $month = null;

  /**
   * 
   * @var int $dayOfWeek
   * @access public
   */
  public $dayOfWeek = null;

  /**
   * 
   * @var int $day
   * @access public
   */
  public $day = null;

  /**
   * 
   * @var int $hour
   * @access public
   */
  public $hour = null;

  /**
   * 
   * @var int $minute
   * @access public
   */
  public $minute = null;

  /**
   * 
   * @var int $second
   * @access public
   */
  public $second = null;

  /**
   * 
   * @var int $milliseconds
   * @access public
   */
  public $milliseconds = null;

  /**
   * 
   * @param int $year
   * @param int $month
   * @param int $dayOfWeek
   * @param int $day
   * @param int $hour
   * @param int $minute
   * @param int $second
   * @param int $milliseconds
   * @access public
   */
  public function __construct($year = null, $month = null, $dayOfWeek = null, $day = null, $hour = null, $minute = null, $second = null, $milliseconds = null)
  {
    $this->year = $year;
    $this->month = $month;
    $this->dayOfWeek = $dayOfWeek;
    $this->day = $day;
    $this->hour = $hour;
    $this->minute = $minute;
    $this->second = $second;
    $this->milliseconds = $milliseconds;
  }

}
