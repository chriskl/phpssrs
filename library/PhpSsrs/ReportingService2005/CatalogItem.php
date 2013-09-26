<?php

namespace PhpSsrs\ReportingService2005;

class CatalogItem
{

  /**
   * 
   * @var string $ID
   * @access public
   */
  public $ID = null;

  /**
   * 
   * @var string $Name
   * @access public
   */
  public $Name = null;

  /**
   * 
   * @var string $Path
   * @access public
   */
  public $Path = null;

  /**
   * 
   * @var string $VirtualPath
   * @access public
   */
  public $VirtualPath = null;

  /**
   * 
   * @var ItemTypeEnum $Type
   * @access public
   */
  public $Type = null;

  /**
   * 
   * @var int $Size
   * @access public
   */
  public $Size = null;

  /**
   * 
   * @var string $Description
   * @access public
   */
  public $Description = null;

  /**
   * 
   * @var boolean $Hidden
   * @access public
   */
  public $Hidden = null;

  /**
   * 
   * @var dateTime $CreationDate
   * @access public
   */
  public $CreationDate = null;

  /**
   * 
   * @var dateTime $ModifiedDate
   * @access public
   */
  public $ModifiedDate = null;

  /**
   * 
   * @var string $CreatedBy
   * @access public
   */
  public $CreatedBy = null;

  /**
   * 
   * @var string $ModifiedBy
   * @access public
   */
  public $ModifiedBy = null;

  /**
   * 
   * @var string $MimeType
   * @access public
   */
  public $MimeType = null;

  /**
   * 
   * @var dateTime $ExecutionDate
   * @access public
   */
  public $ExecutionDate = null;

  /**
   * 
   * @param string $ID
   * @param string $Name
   * @param string $Path
   * @param string $VirtualPath
   * @param ItemTypeEnum $Type
   * @param int $Size
   * @param string $Description
   * @param boolean $Hidden
   * @param dateTime $CreationDate
   * @param dateTime $ModifiedDate
   * @param string $CreatedBy
   * @param string $ModifiedBy
   * @param string $MimeType
   * @param dateTime $ExecutionDate
   * @access public
   */
  public function __construct($ID, $Name, $Path, $VirtualPath, $Type, $Size, $Description, $Hidden, $CreationDate, $ModifiedDate, $CreatedBy, $ModifiedBy, $MimeType, $ExecutionDate)
  {
    $this->ID = $ID;
    $this->Name = $Name;
    $this->Path = $Path;
    $this->VirtualPath = $VirtualPath;
    $this->Type = $Type;
    $this->Size = $Size;
    $this->Description = $Description;
    $this->Hidden = $Hidden;
    $this->CreationDate = $CreationDate;
    $this->ModifiedDate = $ModifiedDate;
    $this->CreatedBy = $CreatedBy;
    $this->ModifiedBy = $ModifiedBy;
    $this->MimeType = $MimeType;
    $this->ExecutionDate = $ExecutionDate;
  }

}
