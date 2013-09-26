<?php

namespace PhpSsrs\ReportingService2006;


/**
 * The Reporting Services Web Service enables you to manage a report server and its contents including server settings, security, reports, subscriptions, and data sources.
 * 
 */
class ReportingService2006 extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ListSecureMethods' => '\PhpSsrs\ReportingService2006\ListSecureMethods',
    'ListSecureMethodsResponse' => '\PhpSsrs\ReportingService2006\ListSecureMethodsResponse',
    'TrustedUserHeader' => '\PhpSsrs\ReportingService2006\TrustedUserHeader',
    'ServerInfoHeader' => '\PhpSsrs\ReportingService2006\ServerInfoHeader',
    'TimeZoneInformation' => '\PhpSsrs\ReportingService2006\TimeZoneInformation',
    'SYSTEMTIME' => '\PhpSsrs\ReportingService2006\SYSTEMTIME',
    'GetSystemProperties' => '\PhpSsrs\ReportingService2006\GetSystemProperties',
    'Property' => '\PhpSsrs\ReportingService2006\Property',
    'GetSystemPropertiesResponse' => '\PhpSsrs\ReportingService2006\GetSystemPropertiesResponse',
    'SetSystemProperties' => '\PhpSsrs\ReportingService2006\SetSystemProperties',
    'SetSystemPropertiesResponse' => '\PhpSsrs\ReportingService2006\SetSystemPropertiesResponse',
    'DeleteItem' => '\PhpSsrs\ReportingService2006\DeleteItem',
    'DeleteItemResponse' => '\PhpSsrs\ReportingService2006\DeleteItemResponse',
    'MoveItem' => '\PhpSsrs\ReportingService2006\MoveItem',
    'MoveItemResponse' => '\PhpSsrs\ReportingService2006\MoveItemResponse',
    'ListChildren' => '\PhpSsrs\ReportingService2006\ListChildren',
    'ListChildrenResponse' => '\PhpSsrs\ReportingService2006\ListChildrenResponse',
    'CatalogItem' => '\PhpSsrs\ReportingService2006\CatalogItem',
    'ListParents' => '\PhpSsrs\ReportingService2006\ListParents',
    'ListParentsResponse' => '\PhpSsrs\ReportingService2006\ListParentsResponse',
    'ListDependentItems' => '\PhpSsrs\ReportingService2006\ListDependentItems',
    'ListDependentItemsResponse' => '\PhpSsrs\ReportingService2006\ListDependentItemsResponse',
    'GetProperties' => '\PhpSsrs\ReportingService2006\GetProperties',
    'GetPropertiesResponse' => '\PhpSsrs\ReportingService2006\GetPropertiesResponse',
    'SetProperties' => '\PhpSsrs\ReportingService2006\SetProperties',
    'SetPropertiesResponse' => '\PhpSsrs\ReportingService2006\SetPropertiesResponse',
    'GetItemType' => '\PhpSsrs\ReportingService2006\GetItemType',
    'GetItemTypeResponse' => '\PhpSsrs\ReportingService2006\GetItemTypeResponse',
    'CreateFolder' => '\PhpSsrs\ReportingService2006\CreateFolder',
    'CreateFolderResponse' => '\PhpSsrs\ReportingService2006\CreateFolderResponse',
    'CreateReport' => '\PhpSsrs\ReportingService2006\CreateReport',
    'CreateReportResponse' => '\PhpSsrs\ReportingService2006\CreateReportResponse',
    'Warning' => '\PhpSsrs\ReportingService2006\Warning',
    'GetReportDefinition' => '\PhpSsrs\ReportingService2006\GetReportDefinition',
    'GetReportDefinitionResponse' => '\PhpSsrs\ReportingService2006\GetReportDefinitionResponse',
    'SetReportDefinition' => '\PhpSsrs\ReportingService2006\SetReportDefinition',
    'SetReportDefinitionResponse' => '\PhpSsrs\ReportingService2006\SetReportDefinitionResponse',
    'CreateResource' => '\PhpSsrs\ReportingService2006\CreateResource',
    'CreateResourceResponse' => '\PhpSsrs\ReportingService2006\CreateResourceResponse',
    'SetResourceContents' => '\PhpSsrs\ReportingService2006\SetResourceContents',
    'SetResourceContentsResponse' => '\PhpSsrs\ReportingService2006\SetResourceContentsResponse',
    'GetResourceContents' => '\PhpSsrs\ReportingService2006\GetResourceContents',
    'GetResourceContentsResponse' => '\PhpSsrs\ReportingService2006\GetResourceContentsResponse',
    'GetReportParameters' => '\PhpSsrs\ReportingService2006\GetReportParameters',
    'ParameterValue' => '\PhpSsrs\ReportingService2006\ParameterValue',
    'ParameterValueOrFieldReference' => '\PhpSsrs\ReportingService2006\ParameterValueOrFieldReference',
    'DataSourceCredentials' => '\PhpSsrs\ReportingService2006\DataSourceCredentials',
    'GetReportParametersResponse' => '\PhpSsrs\ReportingService2006\GetReportParametersResponse',
    'ReportParameter' => '\PhpSsrs\ReportingService2006\ReportParameter',
    'ValidValue' => '\PhpSsrs\ReportingService2006\ValidValue',
    'SetReportParameters' => '\PhpSsrs\ReportingService2006\SetReportParameters',
    'SetReportParametersResponse' => '\PhpSsrs\ReportingService2006\SetReportParametersResponse',
    'SetExecutionOptions' => '\PhpSsrs\ReportingService2006\SetExecutionOptions',
    'ScheduleDefinition' => '\PhpSsrs\ReportingService2006\ScheduleDefinition',
    'ScheduleDefinitionOrReference' => '\PhpSsrs\ReportingService2006\ScheduleDefinitionOrReference',
    'ScheduleReference' => '\PhpSsrs\ReportingService2006\ScheduleReference',
    'NoSchedule' => '\PhpSsrs\ReportingService2006\NoSchedule',
    'MonthlyRecurrence' => '\PhpSsrs\ReportingService2006\MonthlyRecurrence',
    'RecurrencePattern' => '\PhpSsrs\ReportingService2006\RecurrencePattern',
    'MonthlyDOWRecurrence' => '\PhpSsrs\ReportingService2006\MonthlyDOWRecurrence',
    'DaysOfWeekSelector' => '\PhpSsrs\ReportingService2006\DaysOfWeekSelector',
    'MonthsOfYearSelector' => '\PhpSsrs\ReportingService2006\MonthsOfYearSelector',
    'WeeklyRecurrence' => '\PhpSsrs\ReportingService2006\WeeklyRecurrence',
    'DailyRecurrence' => '\PhpSsrs\ReportingService2006\DailyRecurrence',
    'MinuteRecurrence' => '\PhpSsrs\ReportingService2006\MinuteRecurrence',
    'SetExecutionOptionsResponse' => '\PhpSsrs\ReportingService2006\SetExecutionOptionsResponse',
    'GetExecutionOptions' => '\PhpSsrs\ReportingService2006\GetExecutionOptions',
    'GetExecutionOptionsResponse' => '\PhpSsrs\ReportingService2006\GetExecutionOptionsResponse',
    'SetCacheOptions' => '\PhpSsrs\ReportingService2006\SetCacheOptions',
    'ScheduleExpiration' => '\PhpSsrs\ReportingService2006\ScheduleExpiration',
    'ExpirationDefinition' => '\PhpSsrs\ReportingService2006\ExpirationDefinition',
    'TimeExpiration' => '\PhpSsrs\ReportingService2006\TimeExpiration',
    'SetCacheOptionsResponse' => '\PhpSsrs\ReportingService2006\SetCacheOptionsResponse',
    'GetCacheOptions' => '\PhpSsrs\ReportingService2006\GetCacheOptions',
    'GetCacheOptionsResponse' => '\PhpSsrs\ReportingService2006\GetCacheOptionsResponse',
    'UpdateReportExecutionSnapshot' => '\PhpSsrs\ReportingService2006\UpdateReportExecutionSnapshot',
    'UpdateReportExecutionSnapshotResponse' => '\PhpSsrs\ReportingService2006\UpdateReportExecutionSnapshotResponse',
    'FlushCache' => '\PhpSsrs\ReportingService2006\FlushCache',
    'FlushCacheResponse' => '\PhpSsrs\ReportingService2006\FlushCacheResponse',
    'ListJobs' => '\PhpSsrs\ReportingService2006\ListJobs',
    'ListJobsResponse' => '\PhpSsrs\ReportingService2006\ListJobsResponse',
    'Job' => '\PhpSsrs\ReportingService2006\Job',
    'CancelJob' => '\PhpSsrs\ReportingService2006\CancelJob',
    'CancelJobResponse' => '\PhpSsrs\ReportingService2006\CancelJobResponse',
    'CreateDataSource' => '\PhpSsrs\ReportingService2006\CreateDataSource',
    'DataSourceDefinition' => '\PhpSsrs\ReportingService2006\DataSourceDefinition',
    'DataSourceDefinitionOrReference' => '\PhpSsrs\ReportingService2006\DataSourceDefinitionOrReference',
    'CreateDataSourceResponse' => '\PhpSsrs\ReportingService2006\CreateDataSourceResponse',
    'GetDataSourceContents' => '\PhpSsrs\ReportingService2006\GetDataSourceContents',
    'GetDataSourceContentsResponse' => '\PhpSsrs\ReportingService2006\GetDataSourceContentsResponse',
    'SetDataSourceContents' => '\PhpSsrs\ReportingService2006\SetDataSourceContents',
    'SetDataSourceContentsResponse' => '\PhpSsrs\ReportingService2006\SetDataSourceContentsResponse',
    'EnableDataSource' => '\PhpSsrs\ReportingService2006\EnableDataSource',
    'EnableDataSourceResponse' => '\PhpSsrs\ReportingService2006\EnableDataSourceResponse',
    'DisableDataSource' => '\PhpSsrs\ReportingService2006\DisableDataSource',
    'DisableDataSourceResponse' => '\PhpSsrs\ReportingService2006\DisableDataSourceResponse',
    'SetItemDataSources' => '\PhpSsrs\ReportingService2006\SetItemDataSources',
    'DataSource' => '\PhpSsrs\ReportingService2006\DataSource',
    'InvalidDataSourceReference' => '\PhpSsrs\ReportingService2006\InvalidDataSourceReference',
    'DataSourceReference' => '\PhpSsrs\ReportingService2006\DataSourceReference',
    'SetItemDataSourcesResponse' => '\PhpSsrs\ReportingService2006\SetItemDataSourcesResponse',
    'GetItemDataSources' => '\PhpSsrs\ReportingService2006\GetItemDataSources',
    'GetItemDataSourcesResponse' => '\PhpSsrs\ReportingService2006\GetItemDataSourcesResponse',
    'GetItemDataSourcePrompts' => '\PhpSsrs\ReportingService2006\GetItemDataSourcePrompts',
    'GetItemDataSourcePromptsResponse' => '\PhpSsrs\ReportingService2006\GetItemDataSourcePromptsResponse',
    'DataSourcePrompt' => '\PhpSsrs\ReportingService2006\DataSourcePrompt',
    'CreateReportHistorySnapshot' => '\PhpSsrs\ReportingService2006\CreateReportHistorySnapshot',
    'CreateReportHistorySnapshotResponse' => '\PhpSsrs\ReportingService2006\CreateReportHistorySnapshotResponse',
    'SetReportHistoryOptions' => '\PhpSsrs\ReportingService2006\SetReportHistoryOptions',
    'SetReportHistoryOptionsResponse' => '\PhpSsrs\ReportingService2006\SetReportHistoryOptionsResponse',
    'GetReportHistoryOptions' => '\PhpSsrs\ReportingService2006\GetReportHistoryOptions',
    'GetReportHistoryOptionsResponse' => '\PhpSsrs\ReportingService2006\GetReportHistoryOptionsResponse',
    'SetReportHistoryLimit' => '\PhpSsrs\ReportingService2006\SetReportHistoryLimit',
    'SetReportHistoryLimitResponse' => '\PhpSsrs\ReportingService2006\SetReportHistoryLimitResponse',
    'GetReportHistoryLimit' => '\PhpSsrs\ReportingService2006\GetReportHistoryLimit',
    'GetReportHistoryLimitResponse' => '\PhpSsrs\ReportingService2006\GetReportHistoryLimitResponse',
    'ListReportHistory' => '\PhpSsrs\ReportingService2006\ListReportHistory',
    'ListReportHistoryResponse' => '\PhpSsrs\ReportingService2006\ListReportHistoryResponse',
    'ReportHistorySnapshot' => '\PhpSsrs\ReportingService2006\ReportHistorySnapshot',
    'DeleteReportHistorySnapshot' => '\PhpSsrs\ReportingService2006\DeleteReportHistorySnapshot',
    'DeleteReportHistorySnapshotResponse' => '\PhpSsrs\ReportingService2006\DeleteReportHistorySnapshotResponse',
    'CreateSchedule' => '\PhpSsrs\ReportingService2006\CreateSchedule',
    'CreateScheduleResponse' => '\PhpSsrs\ReportingService2006\CreateScheduleResponse',
    'DeleteSchedule' => '\PhpSsrs\ReportingService2006\DeleteSchedule',
    'DeleteScheduleResponse' => '\PhpSsrs\ReportingService2006\DeleteScheduleResponse',
    'SetScheduleProperties' => '\PhpSsrs\ReportingService2006\SetScheduleProperties',
    'SetSchedulePropertiesResponse' => '\PhpSsrs\ReportingService2006\SetSchedulePropertiesResponse',
    'GetScheduleProperties' => '\PhpSsrs\ReportingService2006\GetScheduleProperties',
    'GetSchedulePropertiesResponse' => '\PhpSsrs\ReportingService2006\GetSchedulePropertiesResponse',
    'Schedule' => '\PhpSsrs\ReportingService2006\Schedule',
    'ListScheduledReports' => '\PhpSsrs\ReportingService2006\ListScheduledReports',
    'ListScheduledReportsResponse' => '\PhpSsrs\ReportingService2006\ListScheduledReportsResponse',
    'ListSchedules' => '\PhpSsrs\ReportingService2006\ListSchedules',
    'ListSchedulesResponse' => '\PhpSsrs\ReportingService2006\ListSchedulesResponse',
    'PauseSchedule' => '\PhpSsrs\ReportingService2006\PauseSchedule',
    'PauseScheduleResponse' => '\PhpSsrs\ReportingService2006\PauseScheduleResponse',
    'ResumeSchedule' => '\PhpSsrs\ReportingService2006\ResumeSchedule',
    'ResumeScheduleResponse' => '\PhpSsrs\ReportingService2006\ResumeScheduleResponse',
    'CreateSubscription' => '\PhpSsrs\ReportingService2006\CreateSubscription',
    'ExtensionSettings' => '\PhpSsrs\ReportingService2006\ExtensionSettings',
    'ParameterFieldReference' => '\PhpSsrs\ReportingService2006\ParameterFieldReference',
    'CreateSubscriptionResponse' => '\PhpSsrs\ReportingService2006\CreateSubscriptionResponse',
    'CreateDataDrivenSubscription' => '\PhpSsrs\ReportingService2006\CreateDataDrivenSubscription',
    'DataRetrievalPlan' => '\PhpSsrs\ReportingService2006\DataRetrievalPlan',
    'DataSetDefinition' => '\PhpSsrs\ReportingService2006\DataSetDefinition',
    'Field' => '\PhpSsrs\ReportingService2006\Field',
    'QueryDefinition' => '\PhpSsrs\ReportingService2006\QueryDefinition',
    'CreateDataDrivenSubscriptionResponse' => '\PhpSsrs\ReportingService2006\CreateDataDrivenSubscriptionResponse',
    'SetSubscriptionProperties' => '\PhpSsrs\ReportingService2006\SetSubscriptionProperties',
    'SetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2006\SetSubscriptionPropertiesResponse',
    'SetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportingService2006\SetDataDrivenSubscriptionProperties',
    'SetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2006\SetDataDrivenSubscriptionPropertiesResponse',
    'GetSubscriptionProperties' => '\PhpSsrs\ReportingService2006\GetSubscriptionProperties',
    'GetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2006\GetSubscriptionPropertiesResponse',
    'ActiveState' => '\PhpSsrs\ReportingService2006\ActiveState',
    'GetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportingService2006\GetDataDrivenSubscriptionProperties',
    'GetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2006\GetDataDrivenSubscriptionPropertiesResponse',
    'DeleteSubscription' => '\PhpSsrs\ReportingService2006\DeleteSubscription',
    'DeleteSubscriptionResponse' => '\PhpSsrs\ReportingService2006\DeleteSubscriptionResponse',
    'PrepareQuery' => '\PhpSsrs\ReportingService2006\PrepareQuery',
    'PrepareQueryResponse' => '\PhpSsrs\ReportingService2006\PrepareQueryResponse',
    'GetExtensionSettings' => '\PhpSsrs\ReportingService2006\GetExtensionSettings',
    'GetExtensionSettingsResponse' => '\PhpSsrs\ReportingService2006\GetExtensionSettingsResponse',
    'ExtensionParameter' => '\PhpSsrs\ReportingService2006\ExtensionParameter',
    'ValidateExtensionSettings' => '\PhpSsrs\ReportingService2006\ValidateExtensionSettings',
    'ValidateExtensionSettingsResponse' => '\PhpSsrs\ReportingService2006\ValidateExtensionSettingsResponse',
    'ListAllSubscriptions' => '\PhpSsrs\ReportingService2006\ListAllSubscriptions',
    'ListAllSubscriptionsResponse' => '\PhpSsrs\ReportingService2006\ListAllSubscriptionsResponse',
    'Subscription' => '\PhpSsrs\ReportingService2006\Subscription',
    'ListMySubscriptions' => '\PhpSsrs\ReportingService2006\ListMySubscriptions',
    'ListMySubscriptionsResponse' => '\PhpSsrs\ReportingService2006\ListMySubscriptionsResponse',
    'ListReportSubscriptions' => '\PhpSsrs\ReportingService2006\ListReportSubscriptions',
    'ListReportSubscriptionsResponse' => '\PhpSsrs\ReportingService2006\ListReportSubscriptionsResponse',
    'ListExtensions' => '\PhpSsrs\ReportingService2006\ListExtensions',
    'ListExtensionsResponse' => '\PhpSsrs\ReportingService2006\ListExtensionsResponse',
    'Extension' => '\PhpSsrs\ReportingService2006\Extension',
    'ListEvents' => '\PhpSsrs\ReportingService2006\ListEvents',
    'ListEventsResponse' => '\PhpSsrs\ReportingService2006\ListEventsResponse',
    'Event' => '\PhpSsrs\ReportingService2006\Event',
    'FireEvent' => '\PhpSsrs\ReportingService2006\FireEvent',
    'FireEventResponse' => '\PhpSsrs\ReportingService2006\FireEventResponse',
    'ListTasks' => '\PhpSsrs\ReportingService2006\ListTasks',
    'ListTasksResponse' => '\PhpSsrs\ReportingService2006\ListTasksResponse',
    'Task' => '\PhpSsrs\ReportingService2006\Task',
    'ListRoles' => '\PhpSsrs\ReportingService2006\ListRoles',
    'ListRolesResponse' => '\PhpSsrs\ReportingService2006\ListRolesResponse',
    'Role' => '\PhpSsrs\ReportingService2006\Role',
    'GetRoleProperties' => '\PhpSsrs\ReportingService2006\GetRoleProperties',
    'GetRolePropertiesResponse' => '\PhpSsrs\ReportingService2006\GetRolePropertiesResponse',
    'GetPolicies' => '\PhpSsrs\ReportingService2006\GetPolicies',
    'GetPoliciesResponse' => '\PhpSsrs\ReportingService2006\GetPoliciesResponse',
    'Policy' => '\PhpSsrs\ReportingService2006\Policy',
    'SetPolicies' => '\PhpSsrs\ReportingService2006\SetPolicies',
    'SetPoliciesResponse' => '\PhpSsrs\ReportingService2006\SetPoliciesResponse',
    'InheritParentSecurity' => '\PhpSsrs\ReportingService2006\InheritParentSecurity',
    'InheritParentSecurityResponse' => '\PhpSsrs\ReportingService2006\InheritParentSecurityResponse',
    'GetPermissions' => '\PhpSsrs\ReportingService2006\GetPermissions',
    'GetPermissionsResponse' => '\PhpSsrs\ReportingService2006\GetPermissionsResponse',
    'CreateModel' => '\PhpSsrs\ReportingService2006\CreateModel',
    'CreateModelResponse' => '\PhpSsrs\ReportingService2006\CreateModelResponse',
    'GetModelDefinition' => '\PhpSsrs\ReportingService2006\GetModelDefinition',
    'GetModelDefinitionResponse' => '\PhpSsrs\ReportingService2006\GetModelDefinitionResponse',
    'SetModelDefinition' => '\PhpSsrs\ReportingService2006\SetModelDefinition',
    'SetModelDefinitionResponse' => '\PhpSsrs\ReportingService2006\SetModelDefinitionResponse',
    'ListModelPerspectives' => '\PhpSsrs\ReportingService2006\ListModelPerspectives',
    'ListModelPerspectivesResponse' => '\PhpSsrs\ReportingService2006\ListModelPerspectivesResponse',
    'ModelCatalogItem' => '\PhpSsrs\ReportingService2006\ModelCatalogItem',
    'ModelPerspective' => '\PhpSsrs\ReportingService2006\ModelPerspective',
    'GetUserModel' => '\PhpSsrs\ReportingService2006\GetUserModel',
    'GetUserModelResponse' => '\PhpSsrs\ReportingService2006\GetUserModelResponse',
    'ListModelItemChildren' => '\PhpSsrs\ReportingService2006\ListModelItemChildren',
    'ListModelItemChildrenResponse' => '\PhpSsrs\ReportingService2006\ListModelItemChildrenResponse',
    'ModelItem' => '\PhpSsrs\ReportingService2006\ModelItem',
    'GetModelItemPermissions' => '\PhpSsrs\ReportingService2006\GetModelItemPermissions',
    'GetModelItemPermissionsResponse' => '\PhpSsrs\ReportingService2006\GetModelItemPermissionsResponse',
    'GetModelItemPolicies' => '\PhpSsrs\ReportingService2006\GetModelItemPolicies',
    'GetModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2006\GetModelItemPoliciesResponse',
    'SetModelItemPolicies' => '\PhpSsrs\ReportingService2006\SetModelItemPolicies',
    'SetModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2006\SetModelItemPoliciesResponse',
    'InheritModelItemParentSecurity' => '\PhpSsrs\ReportingService2006\InheritModelItemParentSecurity',
    'InheritModelItemParentSecurityResponse' => '\PhpSsrs\ReportingService2006\InheritModelItemParentSecurityResponse',
    'RemoveAllModelItemPolicies' => '\PhpSsrs\ReportingService2006\RemoveAllModelItemPolicies',
    'RemoveAllModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2006\RemoveAllModelItemPoliciesResponse',
    'SetModelDrillthroughReports' => '\PhpSsrs\ReportingService2006\SetModelDrillthroughReports',
    'ModelDrillthroughReport' => '\PhpSsrs\ReportingService2006\ModelDrillthroughReport',
    'SetModelDrillthroughReportsResponse' => '\PhpSsrs\ReportingService2006\SetModelDrillthroughReportsResponse',
    'ListModelDrillthroughReports' => '\PhpSsrs\ReportingService2006\ListModelDrillthroughReports',
    'ListModelDrillthroughReportsResponse' => '\PhpSsrs\ReportingService2006\ListModelDrillthroughReportsResponse',
    'GenerateModel' => '\PhpSsrs\ReportingService2006\GenerateModel',
    'GenerateModelResponse' => '\PhpSsrs\ReportingService2006\GenerateModelResponse',
    'RegenerateModel' => '\PhpSsrs\ReportingService2006\RegenerateModel',
    'RegenerateModelResponse' => '\PhpSsrs\ReportingService2006\RegenerateModelResponse');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'wsdl/ReportService2006.wsdl')
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
   * @param GetSystemProperties $parameters
   * @access public
   * @return GetSystemPropertiesResponse
   */
  public function GetSystemProperties(GetSystemProperties $parameters)
  {
    return $this->__soapCall('GetSystemProperties', array($parameters));
  }

  /**
   * 
   * @param SetSystemProperties $parameters
   * @access public
   * @return SetSystemPropertiesResponse
   */
  public function SetSystemProperties(SetSystemProperties $parameters)
  {
    return $this->__soapCall('SetSystemProperties', array($parameters));
  }

  /**
   * 
   * @param DeleteItem $parameters
   * @access public
   * @return DeleteItemResponse
   */
  public function DeleteItem(DeleteItem $parameters)
  {
    return $this->__soapCall('DeleteItem', array($parameters));
  }

  /**
   * 
   * @param MoveItem $parameters
   * @access public
   * @return MoveItemResponse
   */
  public function MoveItem(MoveItem $parameters)
  {
    return $this->__soapCall('MoveItem', array($parameters));
  }

  /**
   * 
   * @param ListChildren $parameters
   * @access public
   * @return ListChildrenResponse
   */
  public function ListChildren(ListChildren $parameters)
  {
    return $this->__soapCall('ListChildren', array($parameters));
  }

  /**
   * 
   * @param ListParents $parameters
   * @access public
   * @return ListParentsResponse
   */
  public function ListParents(ListParents $parameters)
  {
    return $this->__soapCall('ListParents', array($parameters));
  }

  /**
   * 
   * @param ListDependentItems $parameters
   * @access public
   * @return ListDependentItemsResponse
   */
  public function ListDependentItems(ListDependentItems $parameters)
  {
    return $this->__soapCall('ListDependentItems', array($parameters));
  }

  /**
   * 
   * @param GetProperties $parameters
   * @access public
   * @return GetPropertiesResponse
   */
  public function GetProperties(GetProperties $parameters)
  {
    return $this->__soapCall('GetProperties', array($parameters));
  }

  /**
   * 
   * @param SetProperties $parameters
   * @access public
   * @return SetPropertiesResponse
   */
  public function SetProperties(SetProperties $parameters)
  {
    return $this->__soapCall('SetProperties', array($parameters));
  }

  /**
   * 
   * @param GetItemType $parameters
   * @access public
   * @return GetItemTypeResponse
   */
  public function GetItemType(GetItemType $parameters)
  {
    return $this->__soapCall('GetItemType', array($parameters));
  }

  /**
   * 
   * @param CreateFolder $parameters
   * @access public
   * @return CreateFolderResponse
   */
  public function CreateFolder(CreateFolder $parameters)
  {
    return $this->__soapCall('CreateFolder', array($parameters));
  }

  /**
   * 
   * @param CreateReport $parameters
   * @access public
   * @return CreateReportResponse
   */
  public function CreateReport(CreateReport $parameters)
  {
    return $this->__soapCall('CreateReport', array($parameters));
  }

  /**
   * 
   * @param GetReportDefinition $parameters
   * @access public
   * @return GetReportDefinitionResponse
   */
  public function GetReportDefinition(GetReportDefinition $parameters)
  {
    return $this->__soapCall('GetReportDefinition', array($parameters));
  }

  /**
   * 
   * @param SetReportDefinition $parameters
   * @access public
   * @return SetReportDefinitionResponse
   */
  public function SetReportDefinition(SetReportDefinition $parameters)
  {
    return $this->__soapCall('SetReportDefinition', array($parameters));
  }

  /**
   * 
   * @param CreateResource $parameters
   * @access public
   * @return CreateResourceResponse
   */
  public function CreateResource(CreateResource $parameters)
  {
    return $this->__soapCall('CreateResource', array($parameters));
  }

  /**
   * 
   * @param SetResourceContents $parameters
   * @access public
   * @return SetResourceContentsResponse
   */
  public function SetResourceContents(SetResourceContents $parameters)
  {
    return $this->__soapCall('SetResourceContents', array($parameters));
  }

  /**
   * 
   * @param GetResourceContents $parameters
   * @access public
   * @return GetResourceContentsResponse
   */
  public function GetResourceContents(GetResourceContents $parameters)
  {
    return $this->__soapCall('GetResourceContents', array($parameters));
  }

  /**
   * 
   * @param GetReportParameters $parameters
   * @access public
   * @return GetReportParametersResponse
   */
  public function GetReportParameters(GetReportParameters $parameters)
  {
    return $this->__soapCall('GetReportParameters', array($parameters));
  }

  /**
   * 
   * @param SetReportParameters $parameters
   * @access public
   * @return SetReportParametersResponse
   */
  public function SetReportParameters(SetReportParameters $parameters)
  {
    return $this->__soapCall('SetReportParameters', array($parameters));
  }

  /**
   * 
   * @param SetExecutionOptions $parameters
   * @access public
   * @return SetExecutionOptionsResponse
   */
  public function SetExecutionOptions(SetExecutionOptions $parameters)
  {
    return $this->__soapCall('SetExecutionOptions', array($parameters));
  }

  /**
   * 
   * @param GetExecutionOptions $parameters
   * @access public
   * @return GetExecutionOptionsResponse
   */
  public function GetExecutionOptions(GetExecutionOptions $parameters)
  {
    return $this->__soapCall('GetExecutionOptions', array($parameters));
  }

  /**
   * 
   * @param SetCacheOptions $parameters
   * @access public
   * @return SetCacheOptionsResponse
   */
  public function SetCacheOptions(SetCacheOptions $parameters)
  {
    return $this->__soapCall('SetCacheOptions', array($parameters));
  }

  /**
   * 
   * @param GetCacheOptions $parameters
   * @access public
   * @return GetCacheOptionsResponse
   */
  public function GetCacheOptions(GetCacheOptions $parameters)
  {
    return $this->__soapCall('GetCacheOptions', array($parameters));
  }

  /**
   * 
   * @param UpdateReportExecutionSnapshot $parameters
   * @access public
   * @return UpdateReportExecutionSnapshotResponse
   */
  public function UpdateReportExecutionSnapshot(UpdateReportExecutionSnapshot $parameters)
  {
    return $this->__soapCall('UpdateReportExecutionSnapshot', array($parameters));
  }

  /**
   * 
   * @param FlushCache $parameters
   * @access public
   * @return FlushCacheResponse
   */
  public function FlushCache(FlushCache $parameters)
  {
    return $this->__soapCall('FlushCache', array($parameters));
  }

  /**
   * 
   * @param ListJobs $parameters
   * @access public
   * @return ListJobsResponse
   */
  public function ListJobs(ListJobs $parameters)
  {
    return $this->__soapCall('ListJobs', array($parameters));
  }

  /**
   * 
   * @param CancelJob $parameters
   * @access public
   * @return CancelJobResponse
   */
  public function CancelJob(CancelJob $parameters)
  {
    return $this->__soapCall('CancelJob', array($parameters));
  }

  /**
   * 
   * @param CreateDataSource $parameters
   * @access public
   * @return CreateDataSourceResponse
   */
  public function CreateDataSource(CreateDataSource $parameters)
  {
    return $this->__soapCall('CreateDataSource', array($parameters));
  }

  /**
   * 
   * @param GetDataSourceContents $parameters
   * @access public
   * @return GetDataSourceContentsResponse
   */
  public function GetDataSourceContents(GetDataSourceContents $parameters)
  {
    return $this->__soapCall('GetDataSourceContents', array($parameters));
  }

  /**
   * 
   * @param SetDataSourceContents $parameters
   * @access public
   * @return SetDataSourceContentsResponse
   */
  public function SetDataSourceContents(SetDataSourceContents $parameters)
  {
    return $this->__soapCall('SetDataSourceContents', array($parameters));
  }

  /**
   * 
   * @param EnableDataSource $parameters
   * @access public
   * @return EnableDataSourceResponse
   */
  public function EnableDataSource(EnableDataSource $parameters)
  {
    return $this->__soapCall('EnableDataSource', array($parameters));
  }

  /**
   * 
   * @param DisableDataSource $parameters
   * @access public
   * @return DisableDataSourceResponse
   */
  public function DisableDataSource(DisableDataSource $parameters)
  {
    return $this->__soapCall('DisableDataSource', array($parameters));
  }

  /**
   * 
   * @param SetItemDataSources $parameters
   * @access public
   * @return SetItemDataSourcesResponse
   */
  public function SetItemDataSources(SetItemDataSources $parameters)
  {
    return $this->__soapCall('SetItemDataSources', array($parameters));
  }

  /**
   * 
   * @param GetItemDataSources $parameters
   * @access public
   * @return GetItemDataSourcesResponse
   */
  public function GetItemDataSources(GetItemDataSources $parameters)
  {
    return $this->__soapCall('GetItemDataSources', array($parameters));
  }

  /**
   * 
   * @param GetItemDataSourcePrompts $parameters
   * @access public
   * @return GetItemDataSourcePromptsResponse
   */
  public function GetItemDataSourcePrompts(GetItemDataSourcePrompts $parameters)
  {
    return $this->__soapCall('GetItemDataSourcePrompts', array($parameters));
  }

  /**
   * 
   * @param CreateReportHistorySnapshot $parameters
   * @access public
   * @return CreateReportHistorySnapshotResponse
   */
  public function CreateReportHistorySnapshot(CreateReportHistorySnapshot $parameters)
  {
    return $this->__soapCall('CreateReportHistorySnapshot', array($parameters));
  }

  /**
   * 
   * @param SetReportHistoryOptions $parameters
   * @access public
   * @return SetReportHistoryOptionsResponse
   */
  public function SetReportHistoryOptions(SetReportHistoryOptions $parameters)
  {
    return $this->__soapCall('SetReportHistoryOptions', array($parameters));
  }

  /**
   * 
   * @param GetReportHistoryOptions $parameters
   * @access public
   * @return GetReportHistoryOptionsResponse
   */
  public function GetReportHistoryOptions(GetReportHistoryOptions $parameters)
  {
    return $this->__soapCall('GetReportHistoryOptions', array($parameters));
  }

  /**
   * 
   * @param SetReportHistoryLimit $parameters
   * @access public
   * @return SetReportHistoryLimitResponse
   */
  public function SetReportHistoryLimit(SetReportHistoryLimit $parameters)
  {
    return $this->__soapCall('SetReportHistoryLimit', array($parameters));
  }

  /**
   * 
   * @param GetReportHistoryLimit $parameters
   * @access public
   * @return GetReportHistoryLimitResponse
   */
  public function GetReportHistoryLimit(GetReportHistoryLimit $parameters)
  {
    return $this->__soapCall('GetReportHistoryLimit', array($parameters));
  }

  /**
   * 
   * @param ListReportHistory $parameters
   * @access public
   * @return ListReportHistoryResponse
   */
  public function ListReportHistory(ListReportHistory $parameters)
  {
    return $this->__soapCall('ListReportHistory', array($parameters));
  }

  /**
   * 
   * @param DeleteReportHistorySnapshot $parameters
   * @access public
   * @return DeleteReportHistorySnapshotResponse
   */
  public function DeleteReportHistorySnapshot(DeleteReportHistorySnapshot $parameters)
  {
    return $this->__soapCall('DeleteReportHistorySnapshot', array($parameters));
  }

  /**
   * 
   * @param CreateSchedule $parameters
   * @access public
   * @return CreateScheduleResponse
   */
  public function CreateSchedule(CreateSchedule $parameters)
  {
    return $this->__soapCall('CreateSchedule', array($parameters));
  }

  /**
   * 
   * @param DeleteSchedule $parameters
   * @access public
   * @return DeleteScheduleResponse
   */
  public function DeleteSchedule(DeleteSchedule $parameters)
  {
    return $this->__soapCall('DeleteSchedule', array($parameters));
  }

  /**
   * 
   * @param SetScheduleProperties $parameters
   * @access public
   * @return SetSchedulePropertiesResponse
   */
  public function SetScheduleProperties(SetScheduleProperties $parameters)
  {
    return $this->__soapCall('SetScheduleProperties', array($parameters));
  }

  /**
   * 
   * @param GetScheduleProperties $parameters
   * @access public
   * @return GetSchedulePropertiesResponse
   */
  public function GetScheduleProperties(GetScheduleProperties $parameters)
  {
    return $this->__soapCall('GetScheduleProperties', array($parameters));
  }

  /**
   * 
   * @param ListScheduledReports $parameters
   * @access public
   * @return ListScheduledReportsResponse
   */
  public function ListScheduledReports(ListScheduledReports $parameters)
  {
    return $this->__soapCall('ListScheduledReports', array($parameters));
  }

  /**
   * 
   * @param ListSchedules $parameters
   * @access public
   * @return ListSchedulesResponse
   */
  public function ListSchedules(ListSchedules $parameters)
  {
    return $this->__soapCall('ListSchedules', array($parameters));
  }

  /**
   * 
   * @param PauseSchedule $parameters
   * @access public
   * @return PauseScheduleResponse
   */
  public function PauseSchedule(PauseSchedule $parameters)
  {
    return $this->__soapCall('PauseSchedule', array($parameters));
  }

  /**
   * 
   * @param ResumeSchedule $parameters
   * @access public
   * @return ResumeScheduleResponse
   */
  public function ResumeSchedule(ResumeSchedule $parameters)
  {
    return $this->__soapCall('ResumeSchedule', array($parameters));
  }

  /**
   * 
   * @param CreateSubscription $parameters
   * @access public
   * @return CreateSubscriptionResponse
   */
  public function CreateSubscription(CreateSubscription $parameters)
  {
    return $this->__soapCall('CreateSubscription', array($parameters));
  }

  /**
   * 
   * @param CreateDataDrivenSubscription $parameters
   * @access public
   * @return CreateDataDrivenSubscriptionResponse
   */
  public function CreateDataDrivenSubscription(CreateDataDrivenSubscription $parameters)
  {
    return $this->__soapCall('CreateDataDrivenSubscription', array($parameters));
  }

  /**
   * 
   * @param SetSubscriptionProperties $parameters
   * @access public
   * @return SetSubscriptionPropertiesResponse
   */
  public function SetSubscriptionProperties(SetSubscriptionProperties $parameters)
  {
    return $this->__soapCall('SetSubscriptionProperties', array($parameters));
  }

  /**
   * 
   * @param SetDataDrivenSubscriptionProperties $parameters
   * @access public
   * @return SetDataDrivenSubscriptionPropertiesResponse
   */
  public function SetDataDrivenSubscriptionProperties(SetDataDrivenSubscriptionProperties $parameters)
  {
    return $this->__soapCall('SetDataDrivenSubscriptionProperties', array($parameters));
  }

  /**
   * 
   * @param GetSubscriptionProperties $parameters
   * @access public
   * @return GetSubscriptionPropertiesResponse
   */
  public function GetSubscriptionProperties(GetSubscriptionProperties $parameters)
  {
    return $this->__soapCall('GetSubscriptionProperties', array($parameters));
  }

  /**
   * 
   * @param GetDataDrivenSubscriptionProperties $parameters
   * @access public
   * @return GetDataDrivenSubscriptionPropertiesResponse
   */
  public function GetDataDrivenSubscriptionProperties(GetDataDrivenSubscriptionProperties $parameters)
  {
    return $this->__soapCall('GetDataDrivenSubscriptionProperties', array($parameters));
  }

  /**
   * 
   * @param DeleteSubscription $parameters
   * @access public
   * @return DeleteSubscriptionResponse
   */
  public function DeleteSubscription(DeleteSubscription $parameters)
  {
    return $this->__soapCall('DeleteSubscription', array($parameters));
  }

  /**
   * 
   * @param PrepareQuery $parameters
   * @access public
   * @return PrepareQueryResponse
   */
  public function PrepareQuery(PrepareQuery $parameters)
  {
    return $this->__soapCall('PrepareQuery', array($parameters));
  }

  /**
   * 
   * @param GetExtensionSettings $parameters
   * @access public
   * @return GetExtensionSettingsResponse
   */
  public function GetExtensionSettings(GetExtensionSettings $parameters)
  {
    return $this->__soapCall('GetExtensionSettings', array($parameters));
  }

  /**
   * 
   * @param ValidateExtensionSettings $parameters
   * @access public
   * @return ValidateExtensionSettingsResponse
   */
  public function ValidateExtensionSettings(ValidateExtensionSettings $parameters)
  {
    return $this->__soapCall('ValidateExtensionSettings', array($parameters));
  }

  /**
   * 
   * @param ListAllSubscriptions $parameters
   * @access public
   * @return ListAllSubscriptionsResponse
   */
  public function ListAllSubscriptions(ListAllSubscriptions $parameters)
  {
    return $this->__soapCall('ListAllSubscriptions', array($parameters));
  }

  /**
   * 
   * @param ListMySubscriptions $parameters
   * @access public
   * @return ListMySubscriptionsResponse
   */
  public function ListMySubscriptions(ListMySubscriptions $parameters)
  {
    return $this->__soapCall('ListMySubscriptions', array($parameters));
  }

  /**
   * 
   * @param ListReportSubscriptions $parameters
   * @access public
   * @return ListReportSubscriptionsResponse
   */
  public function ListReportSubscriptions(ListReportSubscriptions $parameters)
  {
    return $this->__soapCall('ListReportSubscriptions', array($parameters));
  }

  /**
   * 
   * @param ListExtensions $parameters
   * @access public
   * @return ListExtensionsResponse
   */
  public function ListExtensions(ListExtensions $parameters)
  {
    return $this->__soapCall('ListExtensions', array($parameters));
  }

  /**
   * 
   * @param ListEvents $parameters
   * @access public
   * @return ListEventsResponse
   */
  public function ListEvents(ListEvents $parameters)
  {
    return $this->__soapCall('ListEvents', array($parameters));
  }

  /**
   * 
   * @param FireEvent $parameters
   * @access public
   * @return FireEventResponse
   */
  public function FireEvent(FireEvent $parameters)
  {
    return $this->__soapCall('FireEvent', array($parameters));
  }

  /**
   * 
   * @param ListTasks $parameters
   * @access public
   * @return ListTasksResponse
   */
  public function ListTasks(ListTasks $parameters)
  {
    return $this->__soapCall('ListTasks', array($parameters));
  }

  /**
   * 
   * @param ListRoles $parameters
   * @access public
   * @return ListRolesResponse
   */
  public function ListRoles(ListRoles $parameters)
  {
    return $this->__soapCall('ListRoles', array($parameters));
  }

  /**
   * 
   * @param GetRoleProperties $parameters
   * @access public
   * @return GetRolePropertiesResponse
   */
  public function GetRoleProperties(GetRoleProperties $parameters)
  {
    return $this->__soapCall('GetRoleProperties', array($parameters));
  }

  /**
   * 
   * @param GetPolicies $parameters
   * @access public
   * @return GetPoliciesResponse
   */
  public function GetPolicies(GetPolicies $parameters)
  {
    return $this->__soapCall('GetPolicies', array($parameters));
  }

  /**
   * 
   * @param SetPolicies $parameters
   * @access public
   * @return SetPoliciesResponse
   */
  public function SetPolicies(SetPolicies $parameters)
  {
    return $this->__soapCall('SetPolicies', array($parameters));
  }

  /**
   * 
   * @param InheritParentSecurity $parameters
   * @access public
   * @return InheritParentSecurityResponse
   */
  public function InheritParentSecurity(InheritParentSecurity $parameters)
  {
    return $this->__soapCall('InheritParentSecurity', array($parameters));
  }

  /**
   * 
   * @param GetPermissions $parameters
   * @access public
   * @return GetPermissionsResponse
   */
  public function GetPermissions(GetPermissions $parameters)
  {
    return $this->__soapCall('GetPermissions', array($parameters));
  }

  /**
   * 
   * @param CreateModel $parameters
   * @access public
   * @return CreateModelResponse
   */
  public function CreateModel(CreateModel $parameters)
  {
    return $this->__soapCall('CreateModel', array($parameters));
  }

  /**
   * 
   * @param GetModelDefinition $parameters
   * @access public
   * @return GetModelDefinitionResponse
   */
  public function GetModelDefinition(GetModelDefinition $parameters)
  {
    return $this->__soapCall('GetModelDefinition', array($parameters));
  }

  /**
   * 
   * @param SetModelDefinition $parameters
   * @access public
   * @return SetModelDefinitionResponse
   */
  public function SetModelDefinition(SetModelDefinition $parameters)
  {
    return $this->__soapCall('SetModelDefinition', array($parameters));
  }

  /**
   * 
   * @param ListModelPerspectives $parameters
   * @access public
   * @return ListModelPerspectivesResponse
   */
  public function ListModelPerspectives(ListModelPerspectives $parameters)
  {
    return $this->__soapCall('ListModelPerspectives', array($parameters));
  }

  /**
   * 
   * @param GetUserModel $parameters
   * @access public
   * @return GetUserModelResponse
   */
  public function GetUserModel(GetUserModel $parameters)
  {
    return $this->__soapCall('GetUserModel', array($parameters));
  }

  /**
   * 
   * @param ListModelItemChildren $parameters
   * @access public
   * @return ListModelItemChildrenResponse
   */
  public function ListModelItemChildren(ListModelItemChildren $parameters)
  {
    return $this->__soapCall('ListModelItemChildren', array($parameters));
  }

  /**
   * 
   * @param GetModelItemPermissions $parameters
   * @access public
   * @return GetModelItemPermissionsResponse
   */
  public function GetModelItemPermissions(GetModelItemPermissions $parameters)
  {
    return $this->__soapCall('GetModelItemPermissions', array($parameters));
  }

  /**
   * 
   * @param GetModelItemPolicies $parameters
   * @access public
   * @return GetModelItemPoliciesResponse
   */
  public function GetModelItemPolicies(GetModelItemPolicies $parameters)
  {
    return $this->__soapCall('GetModelItemPolicies', array($parameters));
  }

  /**
   * 
   * @param SetModelItemPolicies $parameters
   * @access public
   * @return SetModelItemPoliciesResponse
   */
  public function SetModelItemPolicies(SetModelItemPolicies $parameters)
  {
    return $this->__soapCall('SetModelItemPolicies', array($parameters));
  }

  /**
   * 
   * @param InheritModelItemParentSecurity $parameters
   * @access public
   * @return InheritModelItemParentSecurityResponse
   */
  public function InheritModelItemParentSecurity(InheritModelItemParentSecurity $parameters)
  {
    return $this->__soapCall('InheritModelItemParentSecurity', array($parameters));
  }

  /**
   * 
   * @param RemoveAllModelItemPolicies $parameters
   * @access public
   * @return RemoveAllModelItemPoliciesResponse
   */
  public function RemoveAllModelItemPolicies(RemoveAllModelItemPolicies $parameters)
  {
    return $this->__soapCall('RemoveAllModelItemPolicies', array($parameters));
  }

  /**
   * 
   * @param SetModelDrillthroughReports $parameters
   * @access public
   * @return SetModelDrillthroughReportsResponse
   */
  public function SetModelDrillthroughReports(SetModelDrillthroughReports $parameters)
  {
    return $this->__soapCall('SetModelDrillthroughReports', array($parameters));
  }

  /**
   * 
   * @param ListModelDrillthroughReports $parameters
   * @access public
   * @return ListModelDrillthroughReportsResponse
   */
  public function ListModelDrillthroughReports(ListModelDrillthroughReports $parameters)
  {
    return $this->__soapCall('ListModelDrillthroughReports', array($parameters));
  }

  /**
   * 
   * @param GenerateModel $parameters
   * @access public
   * @return GenerateModelResponse
   */
  public function GenerateModel(GenerateModel $parameters)
  {
    return $this->__soapCall('GenerateModel', array($parameters));
  }

  /**
   * 
   * @param RegenerateModel $parameters
   * @access public
   * @return RegenerateModelResponse
   */
  public function RegenerateModel(RegenerateModel $parameters)
  {
    return $this->__soapCall('RegenerateModel', array($parameters));
  }

}
