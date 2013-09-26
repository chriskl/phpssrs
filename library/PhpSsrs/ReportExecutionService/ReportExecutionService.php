<?php

namespace PhpSsrs\ReportExecutionService;


/**
 * The Reporting Services Execution Service enables report execution
 * 
 */
class ReportExecutionService extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ListSecureMethods' => '\PhpSsrs\ReportExecutionService\ListSecureMethods',
    'ListSecureMethodsResponse' => '\PhpSsrs\ReportExecutionService\ListSecureMethodsResponse',
    'TrustedUserHeader' => '\PhpSsrs\ReportExecutionService\TrustedUserHeader',
    'ServerInfoHeader' => '\PhpSsrs\ReportExecutionService\ServerInfoHeader',
    'LoadReport' => '\PhpSsrs\ReportExecutionService\LoadReport',
    'LoadReportResponse' => '\PhpSsrs\ReportExecutionService\LoadReportResponse',
    'ExecutionInfo' => '\PhpSsrs\ReportExecutionService\ExecutionInfo',
    'ReportParameter' => '\PhpSsrs\ReportExecutionService\ReportParameter',
    'ValidValue' => '\PhpSsrs\ReportExecutionService\ValidValue',
    'DataSourcePrompt' => '\PhpSsrs\ReportExecutionService\DataSourcePrompt',
    'PageSettings' => '\PhpSsrs\ReportExecutionService\PageSettings',
    'ReportPaperSize' => '\PhpSsrs\ReportExecutionService\ReportPaperSize',
    'ReportMargins' => '\PhpSsrs\ReportExecutionService\ReportMargins',
    'ExecutionHeader' => '\PhpSsrs\ReportExecutionService\ExecutionHeader',
    'LoadReport2' => '\PhpSsrs\ReportExecutionService\LoadReport2',
    'LoadReport2Response' => '\PhpSsrs\ReportExecutionService\LoadReport2Response',
    'ExecutionInfo2' => '\PhpSsrs\ReportExecutionService\ExecutionInfo2',
    'LoadReportDefinition' => '\PhpSsrs\ReportExecutionService\LoadReportDefinition',
    'LoadReportDefinitionResponse' => '\PhpSsrs\ReportExecutionService\LoadReportDefinitionResponse',
    'Warning' => '\PhpSsrs\ReportExecutionService\Warning',
    'LoadReportDefinition2' => '\PhpSsrs\ReportExecutionService\LoadReportDefinition2',
    'LoadReportDefinition2Response' => '\PhpSsrs\ReportExecutionService\LoadReportDefinition2Response',
    'SetExecutionCredentials' => '\PhpSsrs\ReportExecutionService\SetExecutionCredentials',
    'DataSourceCredentials' => '\PhpSsrs\ReportExecutionService\DataSourceCredentials',
    'SetExecutionCredentialsResponse' => '\PhpSsrs\ReportExecutionService\SetExecutionCredentialsResponse',
    'SetExecutionCredentials2' => '\PhpSsrs\ReportExecutionService\SetExecutionCredentials2',
    'SetExecutionCredentials2Response' => '\PhpSsrs\ReportExecutionService\SetExecutionCredentials2Response',
    'SetExecutionParameters' => '\PhpSsrs\ReportExecutionService\SetExecutionParameters',
    'ParameterValue' => '\PhpSsrs\ReportExecutionService\ParameterValue',
    'ParameterValueOrFieldReference' => '\PhpSsrs\ReportExecutionService\ParameterValueOrFieldReference',
    'SetExecutionParametersResponse' => '\PhpSsrs\ReportExecutionService\SetExecutionParametersResponse',
    'SetExecutionParameters2' => '\PhpSsrs\ReportExecutionService\SetExecutionParameters2',
    'SetExecutionParameters2Response' => '\PhpSsrs\ReportExecutionService\SetExecutionParameters2Response',
    'ResetExecution' => '\PhpSsrs\ReportExecutionService\ResetExecution',
    'ResetExecutionResponse' => '\PhpSsrs\ReportExecutionService\ResetExecutionResponse',
    'ResetExecution2' => '\PhpSsrs\ReportExecutionService\ResetExecution2',
    'ResetExecution2Response' => '\PhpSsrs\ReportExecutionService\ResetExecution2Response',
    'Render' => '\PhpSsrs\ReportExecutionService\Render',
    'RenderResponse' => '\PhpSsrs\ReportExecutionService\RenderResponse',
    'Render2' => '\PhpSsrs\ReportExecutionService\Render2',
    'Render2Response' => '\PhpSsrs\ReportExecutionService\Render2Response',
    'RenderStream' => '\PhpSsrs\ReportExecutionService\RenderStream',
    'RenderStreamResponse' => '\PhpSsrs\ReportExecutionService\RenderStreamResponse',
    'GetExecutionInfo' => '\PhpSsrs\ReportExecutionService\GetExecutionInfo',
    'GetExecutionInfoResponse' => '\PhpSsrs\ReportExecutionService\GetExecutionInfoResponse',
    'GetExecutionInfo2' => '\PhpSsrs\ReportExecutionService\GetExecutionInfo2',
    'GetExecutionInfo2Response' => '\PhpSsrs\ReportExecutionService\GetExecutionInfo2Response',
    'GetDocumentMap' => '\PhpSsrs\ReportExecutionService\GetDocumentMap',
    'GetDocumentMapResponse' => '\PhpSsrs\ReportExecutionService\GetDocumentMapResponse',
    'DocumentMapNode' => '\PhpSsrs\ReportExecutionService\DocumentMapNode',
    'LoadDrillthroughTarget' => '\PhpSsrs\ReportExecutionService\LoadDrillthroughTarget',
    'LoadDrillthroughTargetResponse' => '\PhpSsrs\ReportExecutionService\LoadDrillthroughTargetResponse',
    'LoadDrillthroughTarget2' => '\PhpSsrs\ReportExecutionService\LoadDrillthroughTarget2',
    'LoadDrillthroughTarget2Response' => '\PhpSsrs\ReportExecutionService\LoadDrillthroughTarget2Response',
    'ToggleItem' => '\PhpSsrs\ReportExecutionService\ToggleItem',
    'ToggleItemResponse' => '\PhpSsrs\ReportExecutionService\ToggleItemResponse',
    'NavigateDocumentMap' => '\PhpSsrs\ReportExecutionService\NavigateDocumentMap',
    'NavigateDocumentMapResponse' => '\PhpSsrs\ReportExecutionService\NavigateDocumentMapResponse',
    'NavigateBookmark' => '\PhpSsrs\ReportExecutionService\NavigateBookmark',
    'NavigateBookmarkResponse' => '\PhpSsrs\ReportExecutionService\NavigateBookmarkResponse',
    'FindString' => '\PhpSsrs\ReportExecutionService\FindString',
    'FindStringResponse' => '\PhpSsrs\ReportExecutionService\FindStringResponse',
    'Sort' => '\PhpSsrs\ReportExecutionService\Sort',
    'SortResponse' => '\PhpSsrs\ReportExecutionService\SortResponse',
    'Sort2' => '\PhpSsrs\ReportExecutionService\Sort2',
    'Sort2Response' => '\PhpSsrs\ReportExecutionService\Sort2Response',
    'GetRenderResource' => '\PhpSsrs\ReportExecutionService\GetRenderResource',
    'GetRenderResourceResponse' => '\PhpSsrs\ReportExecutionService\GetRenderResourceResponse',
    'ListRenderingExtensions' => '\PhpSsrs\ReportExecutionService\ListRenderingExtensions',
    'ListRenderingExtensionsResponse' => '\PhpSsrs\ReportExecutionService\ListRenderingExtensionsResponse',
    'Extension' => '\PhpSsrs\ReportExecutionService\Extension',
    'LogonUser' => '\PhpSsrs\ReportExecutionService\LogonUser',
    'LogonUserResponse' => '\PhpSsrs\ReportExecutionService\LogonUserResponse',
    'Logoff' => '\PhpSsrs\ReportExecutionService\Logoff',
    'LogoffResponse' => '\PhpSsrs\ReportExecutionService\LogoffResponse');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'wsdl/ReportExecution2005.wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($wsdl, $options);
  }

  /**
   * 
   * @param ListSecureMethods $parameters
   * @access public
   * @return ListSecureMethodsResponse
   */
  public function ListSecureMethods(ListSecureMethods $parameters)
  {
    return $this->__soapCall('ListSecureMethods', array($parameters));
  }

  /**
   * 
   * @param LoadReport $parameters
   * @access public
   * @return LoadReportResponse
   */
  public function LoadReport(LoadReport $parameters)
  {
    return $this->__soapCall('LoadReport', array($parameters));
  }

  /**
   * 
   * @param LoadReport2 $parameters
   * @access public
   * @return LoadReport2Response
   */
  public function LoadReport2(LoadReport2 $parameters)
  {
    return $this->__soapCall('LoadReport2', array($parameters));
  }

  /**
   * 
   * @param LoadReportDefinition $parameters
   * @access public
   * @return LoadReportDefinitionResponse
   */
  public function LoadReportDefinition(LoadReportDefinition $parameters)
  {
    return $this->__soapCall('LoadReportDefinition', array($parameters));
  }

  /**
   * 
   * @param LoadReportDefinition2 $parameters
   * @access public
   * @return LoadReportDefinition2Response
   */
  public function LoadReportDefinition2(LoadReportDefinition2 $parameters)
  {
    return $this->__soapCall('LoadReportDefinition2', array($parameters));
  }

  /**
   * 
   * @param SetExecutionCredentials $parameters
   * @access public
   * @return SetExecutionCredentialsResponse
   */
  public function SetExecutionCredentials(SetExecutionCredentials $parameters)
  {
    return $this->__soapCall('SetExecutionCredentials', array($parameters));
  }

  /**
   * 
   * @param SetExecutionCredentials2 $parameters
   * @access public
   * @return SetExecutionCredentials2Response
   */
  public function SetExecutionCredentials2(SetExecutionCredentials2 $parameters)
  {
    return $this->__soapCall('SetExecutionCredentials2', array($parameters));
  }

  /**
   * 
   * @param SetExecutionParameters $parameters
   * @access public
   * @return SetExecutionParametersResponse
   */
  public function SetExecutionParameters(SetExecutionParameters $parameters)
  {
    return $this->__soapCall('SetExecutionParameters', array($parameters));
  }

  /**
   * 
   * @param SetExecutionParameters2 $parameters
   * @access public
   * @return SetExecutionParameters2Response
   */
  public function SetExecutionParameters2(SetExecutionParameters2 $parameters)
  {
    return $this->__soapCall('SetExecutionParameters2', array($parameters));
  }

  /**
   * 
   * @param ResetExecution $parameters
   * @access public
   * @return ResetExecutionResponse
   */
  public function ResetExecution(ResetExecution $parameters)
  {
    return $this->__soapCall('ResetExecution', array($parameters));
  }

  /**
   * 
   * @param ResetExecution2 $parameters
   * @access public
   * @return ResetExecution2Response
   */
  public function ResetExecution2(ResetExecution2 $parameters)
  {
    return $this->__soapCall('ResetExecution2', array($parameters));
  }

  /**
   * 
   * @param Render $parameters
   * @access public
   * @return RenderResponse
   */
  public function Render(Render $parameters)
  {
    return $this->__soapCall('Render', array($parameters));
  }

  /**
   * 
   * @param Render2 $parameters
   * @access public
   * @return Render2Response
   */
  public function Render2(Render2 $parameters)
  {
    return $this->__soapCall('Render2', array($parameters));
  }

  /**
   * 
   * @param RenderStream $parameters
   * @access public
   * @return RenderStreamResponse
   */
  public function RenderStream(RenderStream $parameters)
  {
    return $this->__soapCall('RenderStream', array($parameters));
  }

  /**
   * 
   * @param GetExecutionInfo $parameters
   * @access public
   * @return GetExecutionInfoResponse
   */
  public function GetExecutionInfo(GetExecutionInfo $parameters)
  {
    return $this->__soapCall('GetExecutionInfo', array($parameters));
  }

  /**
   * 
   * @param GetExecutionInfo2 $parameters
   * @access public
   * @return GetExecutionInfo2Response
   */
  public function GetExecutionInfo2(GetExecutionInfo2 $parameters)
  {
    return $this->__soapCall('GetExecutionInfo2', array($parameters));
  }

  /**
   * 
   * @param GetDocumentMap $parameters
   * @access public
   * @return GetDocumentMapResponse
   */
  public function GetDocumentMap(GetDocumentMap $parameters)
  {
    return $this->__soapCall('GetDocumentMap', array($parameters));
  }

  /**
   * 
   * @param LoadDrillthroughTarget $parameters
   * @access public
   * @return LoadDrillthroughTargetResponse
   */
  public function LoadDrillthroughTarget(LoadDrillthroughTarget $parameters)
  {
    return $this->__soapCall('LoadDrillthroughTarget', array($parameters));
  }

  /**
   * 
   * @param LoadDrillthroughTarget2 $parameters
   * @access public
   * @return LoadDrillthroughTarget2Response
   */
  public function LoadDrillthroughTarget2(LoadDrillthroughTarget2 $parameters)
  {
    return $this->__soapCall('LoadDrillthroughTarget2', array($parameters));
  }

  /**
   * 
   * @param ToggleItem $parameters
   * @access public
   * @return ToggleItemResponse
   */
  public function ToggleItem(ToggleItem $parameters)
  {
    return $this->__soapCall('ToggleItem', array($parameters));
  }

  /**
   * 
   * @param NavigateDocumentMap $parameters
   * @access public
   * @return NavigateDocumentMapResponse
   */
  public function NavigateDocumentMap(NavigateDocumentMap $parameters)
  {
    return $this->__soapCall('NavigateDocumentMap', array($parameters));
  }

  /**
   * 
   * @param NavigateBookmark $parameters
   * @access public
   * @return NavigateBookmarkResponse
   */
  public function NavigateBookmark(NavigateBookmark $parameters)
  {
    return $this->__soapCall('NavigateBookmark', array($parameters));
  }

  /**
   * 
   * @param FindString $parameters
   * @access public
   * @return FindStringResponse
   */
  public function FindString(FindString $parameters)
  {
    return $this->__soapCall('FindString', array($parameters));
  }

  /**
   * 
   * @param Sort $parameters
   * @access public
   * @return SortResponse
   */
  public function Sort(Sort $parameters)
  {
    return $this->__soapCall('Sort', array($parameters));
  }

  /**
   * 
   * @param Sort2 $parameters
   * @access public
   * @return Sort2Response
   */
  public function Sort2(Sort2 $parameters)
  {
    return $this->__soapCall('Sort2', array($parameters));
  }

  /**
   * 
   * @param GetRenderResource $parameters
   * @access public
   * @return GetRenderResourceResponse
   */
  public function GetRenderResource(GetRenderResource $parameters)
  {
    return $this->__soapCall('GetRenderResource', array($parameters));
  }

  /**
   * 
   * @param ListRenderingExtensions $parameters
   * @access public
   * @return ListRenderingExtensionsResponse
   */
  public function ListRenderingExtensions(ListRenderingExtensions $parameters)
  {
    return $this->__soapCall('ListRenderingExtensions', array($parameters));
  }

  /**
   * 
   * @param LogonUser $parameters
   * @access public
   * @return LogonUserResponse
   */
  public function LogonUser(LogonUser $parameters)
  {
    return $this->__soapCall('LogonUser', array($parameters));
  }

  /**
   * 
   * @param Logoff $parameters
   * @access public
   * @return LogoffResponse
   */
  public function Logoff(Logoff $parameters)
  {
    return $this->__soapCall('Logoff', array($parameters));
  }

}
