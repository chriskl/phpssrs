<?php

namespace PhpSsrs\ReportingService2006;

class TimeZoneInformation
{

  /**
   * 
   * @var int $Bias
   * @access public
   */
  public $Bias = null;

  /**
   * 
   * @var int $StandardBias
   * @access public
   */
  public $StandardBias = null;

  /**
   * 
   * @var SYSTEMTIME $StandardDate
   * @access public
   */
  public $StandardDate = null;

  /**
   * 
   * @var int $DaylightBias
   * @access public
   */
  public $DaylightBias = null;

  /**
   * 
   * @var SYSTEMTIME $DaylightDate
   * @access public
   */
  public $DaylightDate = null;

  /**
   * 
   * @param int $Bias
   * @param int $StandardBias
   * @param SYSTEMTIME $StandardDate
   * @param int $DaylightBias
   * @param SYSTEMTIME $DaylightDate
   * @access public
   */
  public function __construct($Bias = null, $StandardBias = null, $StandardDate = null, $DaylightBias = null, $DaylightDate = null)
  {
    $this->Bias = $Bias;
    $this->StandardBias = $StandardBias;
    $this->StandardDate = $StandardDate;
    $this->DaylightBias = $DaylightBias;
    $this->DaylightDate = $DaylightDate;
  }

}
