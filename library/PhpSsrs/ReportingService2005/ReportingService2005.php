<?php

namespace PhpSsrs\ReportingService2005;


/**
 * The Reporting Services Web Service enables you to manage a report server and its contents including server settings, security, reports, subscriptions, and data sources.
 * 
 */
class ReportingService2005 extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'ListSecureMethods' => '\PhpSsrs\ReportingService2005\ListSecureMethods',
    'ListSecureMethodsResponse' => '\PhpSsrs\ReportingService2005\ListSecureMethodsResponse',
    'ServerInfoHeader' => '\PhpSsrs\ReportingService2005\ServerInfoHeader',
    'CreateBatch' => '\PhpSsrs\ReportingService2005\CreateBatch',
    'CreateBatchResponse' => '\PhpSsrs\ReportingService2005\CreateBatchResponse',
    'CancelBatch' => '\PhpSsrs\ReportingService2005\CancelBatch',
    'CancelBatchResponse' => '\PhpSsrs\ReportingService2005\CancelBatchResponse',
    'BatchHeader' => '\PhpSsrs\ReportingService2005\BatchHeader',
    'ExecuteBatch' => '\PhpSsrs\ReportingService2005\ExecuteBatch',
    'ExecuteBatchResponse' => '\PhpSsrs\ReportingService2005\ExecuteBatchResponse',
    'GetSystemProperties' => '\PhpSsrs\ReportingService2005\GetSystemProperties',
    'Property' => '\PhpSsrs\ReportingService2005\Property',
    'GetSystemPropertiesResponse' => '\PhpSsrs\ReportingService2005\GetSystemPropertiesResponse',
    'SetSystemProperties' => '\PhpSsrs\ReportingService2005\SetSystemProperties',
    'SetSystemPropertiesResponse' => '\PhpSsrs\ReportingService2005\SetSystemPropertiesResponse',
    'DeleteItem' => '\PhpSsrs\ReportingService2005\DeleteItem',
    'DeleteItemResponse' => '\PhpSsrs\ReportingService2005\DeleteItemResponse',
    'MoveItem' => '\PhpSsrs\ReportingService2005\MoveItem',
    'MoveItemResponse' => '\PhpSsrs\ReportingService2005\MoveItemResponse',
    'ListChildren' => '\PhpSsrs\ReportingService2005\ListChildren',
    'ListChildrenResponse' => '\PhpSsrs\ReportingService2005\ListChildrenResponse',
    'CatalogItem' => '\PhpSsrs\ReportingService2005\CatalogItem',
    'ListDependentItems' => '\PhpSsrs\ReportingService2005\ListDependentItems',
    'ListDependentItemsResponse' => '\PhpSsrs\ReportingService2005\ListDependentItemsResponse',
    'GetProperties' => '\PhpSsrs\ReportingService2005\GetProperties',
    'GetPropertiesResponse' => '\PhpSsrs\ReportingService2005\GetPropertiesResponse',
    'ItemNamespaceHeader' => '\PhpSsrs\ReportingService2005\ItemNamespaceHeader',
    'SetProperties' => '\PhpSsrs\ReportingService2005\SetProperties',
    'SetPropertiesResponse' => '\PhpSsrs\ReportingService2005\SetPropertiesResponse',
    'GetItemType' => '\PhpSsrs\ReportingService2005\GetItemType',
    'GetItemTypeResponse' => '\PhpSsrs\ReportingService2005\GetItemTypeResponse',
    'CreateFolder' => '\PhpSsrs\ReportingService2005\CreateFolder',
    'CreateFolderResponse' => '\PhpSsrs\ReportingService2005\CreateFolderResponse',
    'CreateReport' => '\PhpSsrs\ReportingService2005\CreateReport',
    'CreateReportResponse' => '\PhpSsrs\ReportingService2005\CreateReportResponse',
    'Warning' => '\PhpSsrs\ReportingService2005\Warning',
    'GetReportDefinition' => '\PhpSsrs\ReportingService2005\GetReportDefinition',
    'GetReportDefinitionResponse' => '\PhpSsrs\ReportingService2005\GetReportDefinitionResponse',
    'SetReportDefinition' => '\PhpSsrs\ReportingService2005\SetReportDefinition',
    'SetReportDefinitionResponse' => '\PhpSsrs\ReportingService2005\SetReportDefinitionResponse',
    'CreateResource' => '\PhpSsrs\ReportingService2005\CreateResource',
    'CreateResourceResponse' => '\PhpSsrs\ReportingService2005\CreateResourceResponse',
    'SetResourceContents' => '\PhpSsrs\ReportingService2005\SetResourceContents',
    'SetResourceContentsResponse' => '\PhpSsrs\ReportingService2005\SetResourceContentsResponse',
    'GetResourceContents' => '\PhpSsrs\ReportingService2005\GetResourceContents',
    'GetResourceContentsResponse' => '\PhpSsrs\ReportingService2005\GetResourceContentsResponse',
    'GetReportParameters' => '\PhpSsrs\ReportingService2005\GetReportParameters',
    'ParameterValue' => '\PhpSsrs\ReportingService2005\ParameterValue',
    'ParameterValueOrFieldReference' => '\PhpSsrs\ReportingService2005\ParameterValueOrFieldReference',
    'DataSourceCredentials' => '\PhpSsrs\ReportingService2005\DataSourceCredentials',
    'GetReportParametersResponse' => '\PhpSsrs\ReportingService2005\GetReportParametersResponse',
    'ReportParameter' => '\PhpSsrs\ReportingService2005\ReportParameter',
    'ValidValue' => '\PhpSsrs\ReportingService2005\ValidValue',
    'SetReportParameters' => '\PhpSsrs\ReportingService2005\SetReportParameters',
    'SetReportParametersResponse' => '\PhpSsrs\ReportingService2005\SetReportParametersResponse',
    'CreateLinkedReport' => '\PhpSsrs\ReportingService2005\CreateLinkedReport',
    'CreateLinkedReportResponse' => '\PhpSsrs\ReportingService2005\CreateLinkedReportResponse',
    'GetReportLink' => '\PhpSsrs\ReportingService2005\GetReportLink',
    'GetReportLinkResponse' => '\PhpSsrs\ReportingService2005\GetReportLinkResponse',
    'SetReportLink' => '\PhpSsrs\ReportingService2005\SetReportLink',
    'SetReportLinkResponse' => '\PhpSsrs\ReportingService2005\SetReportLinkResponse',
    'GetRenderResource' => '\PhpSsrs\ReportingService2005\GetRenderResource',
    'GetRenderResourceResponse' => '\PhpSsrs\ReportingService2005\GetRenderResourceResponse',
    'SetExecutionOptions' => '\PhpSsrs\ReportingService2005\SetExecutionOptions',
    'ScheduleReference' => '\PhpSsrs\ReportingService2005\ScheduleReference',
    'ScheduleDefinitionOrReference' => '\PhpSsrs\ReportingService2005\ScheduleDefinitionOrReference',
    'NoSchedule' => '\PhpSsrs\ReportingService2005\NoSchedule',
    'ScheduleDefinition' => '\PhpSsrs\ReportingService2005\ScheduleDefinition',
    'MonthlyRecurrence' => '\PhpSsrs\ReportingService2005\MonthlyRecurrence',
    'RecurrencePattern' => '\PhpSsrs\ReportingService2005\RecurrencePattern',
    'MonthlyDOWRecurrence' => '\PhpSsrs\ReportingService2005\MonthlyDOWRecurrence',
    'DaysOfWeekSelector' => '\PhpSsrs\ReportingService2005\DaysOfWeekSelector',
    'MonthsOfYearSelector' => '\PhpSsrs\ReportingService2005\MonthsOfYearSelector',
    'WeeklyRecurrence' => '\PhpSsrs\ReportingService2005\WeeklyRecurrence',
    'DailyRecurrence' => '\PhpSsrs\ReportingService2005\DailyRecurrence',
    'MinuteRecurrence' => '\PhpSsrs\ReportingService2005\MinuteRecurrence',
    'SetExecutionOptionsResponse' => '\PhpSsrs\ReportingService2005\SetExecutionOptionsResponse',
    'GetExecutionOptions' => '\PhpSsrs\ReportingService2005\GetExecutionOptions',
    'GetExecutionOptionsResponse' => '\PhpSsrs\ReportingService2005\GetExecutionOptionsResponse',
    'SetCacheOptions' => '\PhpSsrs\ReportingService2005\SetCacheOptions',
    'ScheduleExpiration' => '\PhpSsrs\ReportingService2005\ScheduleExpiration',
    'ExpirationDefinition' => '\PhpSsrs\ReportingService2005\ExpirationDefinition',
    'TimeExpiration' => '\PhpSsrs\ReportingService2005\TimeExpiration',
    'SetCacheOptionsResponse' => '\PhpSsrs\ReportingService2005\SetCacheOptionsResponse',
    'GetCacheOptions' => '\PhpSsrs\ReportingService2005\GetCacheOptions',
    'GetCacheOptionsResponse' => '\PhpSsrs\ReportingService2005\GetCacheOptionsResponse',
    'UpdateReportExecutionSnapshot' => '\PhpSsrs\ReportingService2005\UpdateReportExecutionSnapshot',
    'UpdateReportExecutionSnapshotResponse' => '\PhpSsrs\ReportingService2005\UpdateReportExecutionSnapshotResponse',
    'FlushCache' => '\PhpSsrs\ReportingService2005\FlushCache',
    'FlushCacheResponse' => '\PhpSsrs\ReportingService2005\FlushCacheResponse',
    'ListJobs' => '\PhpSsrs\ReportingService2005\ListJobs',
    'ListJobsResponse' => '\PhpSsrs\ReportingService2005\ListJobsResponse',
    'Job' => '\PhpSsrs\ReportingService2005\Job',
    'CancelJob' => '\PhpSsrs\ReportingService2005\CancelJob',
    'CancelJobResponse' => '\PhpSsrs\ReportingService2005\CancelJobResponse',
    'CreateDataSource' => '\PhpSsrs\ReportingService2005\CreateDataSource',
    'DataSourceDefinition' => '\PhpSsrs\ReportingService2005\DataSourceDefinition',
    'DataSourceDefinitionOrReference' => '\PhpSsrs\ReportingService2005\DataSourceDefinitionOrReference',
    'CreateDataSourceResponse' => '\PhpSsrs\ReportingService2005\CreateDataSourceResponse',
    'GetDataSourceContents' => '\PhpSsrs\ReportingService2005\GetDataSourceContents',
    'GetDataSourceContentsResponse' => '\PhpSsrs\ReportingService2005\GetDataSourceContentsResponse',
    'SetDataSourceContents' => '\PhpSsrs\ReportingService2005\SetDataSourceContents',
    'SetDataSourceContentsResponse' => '\PhpSsrs\ReportingService2005\SetDataSourceContentsResponse',
    'EnableDataSource' => '\PhpSsrs\ReportingService2005\EnableDataSource',
    'EnableDataSourceResponse' => '\PhpSsrs\ReportingService2005\EnableDataSourceResponse',
    'DisableDataSource' => '\PhpSsrs\ReportingService2005\DisableDataSource',
    'DisableDataSourceResponse' => '\PhpSsrs\ReportingService2005\DisableDataSourceResponse',
    'SetItemDataSources' => '\PhpSsrs\ReportingService2005\SetItemDataSources',
    'DataSource' => '\PhpSsrs\ReportingService2005\DataSource',
    'InvalidDataSourceReference' => '\PhpSsrs\ReportingService2005\InvalidDataSourceReference',
    'DataSourceReference' => '\PhpSsrs\ReportingService2005\DataSourceReference',
    'SetItemDataSourcesResponse' => '\PhpSsrs\ReportingService2005\SetItemDataSourcesResponse',
    'GetItemDataSources' => '\PhpSsrs\ReportingService2005\GetItemDataSources',
    'GetItemDataSourcesResponse' => '\PhpSsrs\ReportingService2005\GetItemDataSourcesResponse',
    'GetItemDataSourcePrompts' => '\PhpSsrs\ReportingService2005\GetItemDataSourcePrompts',
    'GetItemDataSourcePromptsResponse' => '\PhpSsrs\ReportingService2005\GetItemDataSourcePromptsResponse',
    'DataSourcePrompt' => '\PhpSsrs\ReportingService2005\DataSourcePrompt',
    'CreateReportHistorySnapshot' => '\PhpSsrs\ReportingService2005\CreateReportHistorySnapshot',
    'CreateReportHistorySnapshotResponse' => '\PhpSsrs\ReportingService2005\CreateReportHistorySnapshotResponse',
    'SetReportHistoryOptions' => '\PhpSsrs\ReportingService2005\SetReportHistoryOptions',
    'SetReportHistoryOptionsResponse' => '\PhpSsrs\ReportingService2005\SetReportHistoryOptionsResponse',
    'GetReportHistoryOptions' => '\PhpSsrs\ReportingService2005\GetReportHistoryOptions',
    'GetReportHistoryOptionsResponse' => '\PhpSsrs\ReportingService2005\GetReportHistoryOptionsResponse',
    'SetReportHistoryLimit' => '\PhpSsrs\ReportingService2005\SetReportHistoryLimit',
    'SetReportHistoryLimitResponse' => '\PhpSsrs\ReportingService2005\SetReportHistoryLimitResponse',
    'GetReportHistoryLimit' => '\PhpSsrs\ReportingService2005\GetReportHistoryLimit',
    'GetReportHistoryLimitResponse' => '\PhpSsrs\ReportingService2005\GetReportHistoryLimitResponse',
    'ListReportHistory' => '\PhpSsrs\ReportingService2005\ListReportHistory',
    'ListReportHistoryResponse' => '\PhpSsrs\ReportingService2005\ListReportHistoryResponse',
    'ReportHistorySnapshot' => '\PhpSsrs\ReportingService2005\ReportHistorySnapshot',
    'DeleteReportHistorySnapshot' => '\PhpSsrs\ReportingService2005\DeleteReportHistorySnapshot',
    'DeleteReportHistorySnapshotResponse' => '\PhpSsrs\ReportingService2005\DeleteReportHistorySnapshotResponse',
    'FindItems' => '\PhpSsrs\ReportingService2005\FindItems',
    'SearchCondition' => '\PhpSsrs\ReportingService2005\SearchCondition',
    'FindItemsResponse' => '\PhpSsrs\ReportingService2005\FindItemsResponse',
    'CreateSchedule' => '\PhpSsrs\ReportingService2005\CreateSchedule',
    'CreateScheduleResponse' => '\PhpSsrs\ReportingService2005\CreateScheduleResponse',
    'DeleteSchedule' => '\PhpSsrs\ReportingService2005\DeleteSchedule',
    'DeleteScheduleResponse' => '\PhpSsrs\ReportingService2005\DeleteScheduleResponse',
    'SetScheduleProperties' => '\PhpSsrs\ReportingService2005\SetScheduleProperties',
    'SetSchedulePropertiesResponse' => '\PhpSsrs\ReportingService2005\SetSchedulePropertiesResponse',
    'GetScheduleProperties' => '\PhpSsrs\ReportingService2005\GetScheduleProperties',
    'GetSchedulePropertiesResponse' => '\PhpSsrs\ReportingService2005\GetSchedulePropertiesResponse',
    'Schedule' => '\PhpSsrs\ReportingService2005\Schedule',
    'ListScheduledReports' => '\PhpSsrs\ReportingService2005\ListScheduledReports',
    'ListScheduledReportsResponse' => '\PhpSsrs\ReportingService2005\ListScheduledReportsResponse',
    'ListSchedules' => '\PhpSsrs\ReportingService2005\ListSchedules',
    'ListSchedulesResponse' => '\PhpSsrs\ReportingService2005\ListSchedulesResponse',
    'PauseSchedule' => '\PhpSsrs\ReportingService2005\PauseSchedule',
    'PauseScheduleResponse' => '\PhpSsrs\ReportingService2005\PauseScheduleResponse',
    'ResumeSchedule' => '\PhpSsrs\ReportingService2005\ResumeSchedule',
    'ResumeScheduleResponse' => '\PhpSsrs\ReportingService2005\ResumeScheduleResponse',
    'CreateSubscription' => '\PhpSsrs\ReportingService2005\CreateSubscription',
    'ExtensionSettings' => '\PhpSsrs\ReportingService2005\ExtensionSettings',
    'ParameterFieldReference' => '\PhpSsrs\ReportingService2005\ParameterFieldReference',
    'CreateSubscriptionResponse' => '\PhpSsrs\ReportingService2005\CreateSubscriptionResponse',
    'CreateDataDrivenSubscription' => '\PhpSsrs\ReportingService2005\CreateDataDrivenSubscription',
    'DataRetrievalPlan' => '\PhpSsrs\ReportingService2005\DataRetrievalPlan',
    'DataSetDefinition' => '\PhpSsrs\ReportingService2005\DataSetDefinition',
    'Field' => '\PhpSsrs\ReportingService2005\Field',
    'QueryDefinition' => '\PhpSsrs\ReportingService2005\QueryDefinition',
    'CreateDataDrivenSubscriptionResponse' => '\PhpSsrs\ReportingService2005\CreateDataDrivenSubscriptionResponse',
    'SetSubscriptionProperties' => '\PhpSsrs\ReportingService2005\SetSubscriptionProperties',
    'SetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2005\SetSubscriptionPropertiesResponse',
    'SetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportingService2005\SetDataDrivenSubscriptionProperties',
    'SetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2005\SetDataDrivenSubscriptionPropertiesResponse',
    'GetSubscriptionProperties' => '\PhpSsrs\ReportingService2005\GetSubscriptionProperties',
    'GetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2005\GetSubscriptionPropertiesResponse',
    'ActiveState' => '\PhpSsrs\ReportingService2005\ActiveState',
    'GetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportingService2005\GetDataDrivenSubscriptionProperties',
    'GetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2005\GetDataDrivenSubscriptionPropertiesResponse',
    'DeleteSubscription' => '\PhpSsrs\ReportingService2005\DeleteSubscription',
    'DeleteSubscriptionResponse' => '\PhpSsrs\ReportingService2005\DeleteSubscriptionResponse',
    'PrepareQuery' => '\PhpSsrs\ReportingService2005\PrepareQuery',
    'PrepareQueryResponse' => '\PhpSsrs\ReportingService2005\PrepareQueryResponse',
    'GetExtensionSettings' => '\PhpSsrs\ReportingService2005\GetExtensionSettings',
    'GetExtensionSettingsResponse' => '\PhpSsrs\ReportingService2005\GetExtensionSettingsResponse',
    'ExtensionParameter' => '\PhpSsrs\ReportingService2005\ExtensionParameter',
    'ValidateExtensionSettings' => '\PhpSsrs\ReportingService2005\ValidateExtensionSettings',
    'ValidateExtensionSettingsResponse' => '\PhpSsrs\ReportingService2005\ValidateExtensionSettingsResponse',
    'ListSubscriptions' => '\PhpSsrs\ReportingService2005\ListSubscriptions',
    'ListSubscriptionsResponse' => '\PhpSsrs\ReportingService2005\ListSubscriptionsResponse',
    'Subscription' => '\PhpSsrs\ReportingService2005\Subscription',
    'ListSubscriptionsUsingDataSource' => '\PhpSsrs\ReportingService2005\ListSubscriptionsUsingDataSource',
    'ListSubscriptionsUsingDataSourceResponse' => '\PhpSsrs\ReportingService2005\ListSubscriptionsUsingDataSourceResponse',
    'ListExtensions' => '\PhpSsrs\ReportingService2005\ListExtensions',
    'ListExtensionsResponse' => '\PhpSsrs\ReportingService2005\ListExtensionsResponse',
    'Extension' => '\PhpSsrs\ReportingService2005\Extension',
    'ListEvents' => '\PhpSsrs\ReportingService2005\ListEvents',
    'ListEventsResponse' => '\PhpSsrs\ReportingService2005\ListEventsResponse',
    'Event' => '\PhpSsrs\ReportingService2005\Event',
    'FireEvent' => '\PhpSsrs\ReportingService2005\FireEvent',
    'FireEventResponse' => '\PhpSsrs\ReportingService2005\FireEventResponse',
    'ListTasks' => '\PhpSsrs\ReportingService2005\ListTasks',
    'ListTasksResponse' => '\PhpSsrs\ReportingService2005\ListTasksResponse',
    'Task' => '\PhpSsrs\ReportingService2005\Task',
    'ListRoles' => '\PhpSsrs\ReportingService2005\ListRoles',
    'ListRolesResponse' => '\PhpSsrs\ReportingService2005\ListRolesResponse',
    'Role' => '\PhpSsrs\ReportingService2005\Role',
    'CreateRole' => '\PhpSsrs\ReportingService2005\CreateRole',
    'CreateRoleResponse' => '\PhpSsrs\ReportingService2005\CreateRoleResponse',
    'DeleteRole' => '\PhpSsrs\ReportingService2005\DeleteRole',
    'DeleteRoleResponse' => '\PhpSsrs\ReportingService2005\DeleteRoleResponse',
    'GetRoleProperties' => '\PhpSsrs\ReportingService2005\GetRoleProperties',
    'GetRolePropertiesResponse' => '\PhpSsrs\ReportingService2005\GetRolePropertiesResponse',
    'SetRoleProperties' => '\PhpSsrs\ReportingService2005\SetRoleProperties',
    'SetRolePropertiesResponse' => '\PhpSsrs\ReportingService2005\SetRolePropertiesResponse',
    'GetSystemPolicies' => '\PhpSsrs\ReportingService2005\GetSystemPolicies',
    'GetSystemPoliciesResponse' => '\PhpSsrs\ReportingService2005\GetSystemPoliciesResponse',
    'Policy' => '\PhpSsrs\ReportingService2005\Policy',
    'SetSystemPolicies' => '\PhpSsrs\ReportingService2005\SetSystemPolicies',
    'SetSystemPoliciesResponse' => '\PhpSsrs\ReportingService2005\SetSystemPoliciesResponse',
    'GetPolicies' => '\PhpSsrs\ReportingService2005\GetPolicies',
    'GetPoliciesResponse' => '\PhpSsrs\ReportingService2005\GetPoliciesResponse',
    'SetPolicies' => '\PhpSsrs\ReportingService2005\SetPolicies',
    'SetPoliciesResponse' => '\PhpSsrs\ReportingService2005\SetPoliciesResponse',
    'InheritParentSecurity' => '\PhpSsrs\ReportingService2005\InheritParentSecurity',
    'InheritParentSecurityResponse' => '\PhpSsrs\ReportingService2005\InheritParentSecurityResponse',
    'GetSystemPermissions' => '\PhpSsrs\ReportingService2005\GetSystemPermissions',
    'GetSystemPermissionsResponse' => '\PhpSsrs\ReportingService2005\GetSystemPermissionsResponse',
    'GetPermissions' => '\PhpSsrs\ReportingService2005\GetPermissions',
    'GetPermissionsResponse' => '\PhpSsrs\ReportingService2005\GetPermissionsResponse',
    'LogonUser' => '\PhpSsrs\ReportingService2005\LogonUser',
    'LogonUserResponse' => '\PhpSsrs\ReportingService2005\LogonUserResponse',
    'Logoff' => '\PhpSsrs\ReportingService2005\Logoff',
    'LogoffResponse' => '\PhpSsrs\ReportingService2005\LogoffResponse',
    'CreateModel' => '\PhpSsrs\ReportingService2005\CreateModel',
    'CreateModelResponse' => '\PhpSsrs\ReportingService2005\CreateModelResponse',
    'GetModelDefinition' => '\PhpSsrs\ReportingService2005\GetModelDefinition',
    'GetModelDefinitionResponse' => '\PhpSsrs\ReportingService2005\GetModelDefinitionResponse',
    'SetModelDefinition' => '\PhpSsrs\ReportingService2005\SetModelDefinition',
    'SetModelDefinitionResponse' => '\PhpSsrs\ReportingService2005\SetModelDefinitionResponse',
    'ListModelPerspectives' => '\PhpSsrs\ReportingService2005\ListModelPerspectives',
    'ListModelPerspectivesResponse' => '\PhpSsrs\ReportingService2005\ListModelPerspectivesResponse',
    'ModelCatalogItem' => '\PhpSsrs\ReportingService2005\ModelCatalogItem',
    'ModelPerspective' => '\PhpSsrs\ReportingService2005\ModelPerspective',
    'GetUserModel' => '\PhpSsrs\ReportingService2005\GetUserModel',
    'GetUserModelResponse' => '\PhpSsrs\ReportingService2005\GetUserModelResponse',
    'ListModelItemChildren' => '\PhpSsrs\ReportingService2005\ListModelItemChildren',
    'ListModelItemChildrenResponse' => '\PhpSsrs\ReportingService2005\ListModelItemChildrenResponse',
    'ModelItem' => '\PhpSsrs\ReportingService2005\ModelItem',
    'GetModelItemPermissions' => '\PhpSsrs\ReportingService2005\GetModelItemPermissions',
    'GetModelItemPermissionsResponse' => '\PhpSsrs\ReportingService2005\GetModelItemPermissionsResponse',
    'GetModelItemPolicies' => '\PhpSsrs\ReportingService2005\GetModelItemPolicies',
    'GetModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2005\GetModelItemPoliciesResponse',
    'SetModelItemPolicies' => '\PhpSsrs\ReportingService2005\SetModelItemPolicies',
    'SetModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2005\SetModelItemPoliciesResponse',
    'InheritModelItemParentSecurity' => '\PhpSsrs\ReportingService2005\InheritModelItemParentSecurity',
    'InheritModelItemParentSecurityResponse' => '\PhpSsrs\ReportingService2005\InheritModelItemParentSecurityResponse',
    'RemoveAllModelItemPolicies' => '\PhpSsrs\ReportingService2005\RemoveAllModelItemPolicies',
    'RemoveAllModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2005\RemoveAllModelItemPoliciesResponse',
    'SetModelDrillthroughReports' => '\PhpSsrs\ReportingService2005\SetModelDrillthroughReports',
    'ModelDrillthroughReport' => '\PhpSsrs\ReportingService2005\ModelDrillthroughReport',
    'SetModelDrillthroughReportsResponse' => '\PhpSsrs\ReportingService2005\SetModelDrillthroughReportsResponse',
    'ListModelDrillthroughReports' => '\PhpSsrs\ReportingService2005\ListModelDrillthroughReports',
    'ListModelDrillthroughReportsResponse' => '\PhpSsrs\ReportingService2005\ListModelDrillthroughReportsResponse',
    'GenerateModel' => '\PhpSsrs\ReportingService2005\GenerateModel',
    'GenerateModelResponse' => '\PhpSsrs\ReportingService2005\GenerateModelResponse',
    'RegenerateModel' => '\PhpSsrs\ReportingService2005\RegenerateModel',
    'RegenerateModelResponse' => '\PhpSsrs\ReportingService2005\RegenerateModelResponse');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'wsdl/ReportService2005.wsdl')
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
   * @param CreateBatch $parameters
   * @access public
   * @return CreateBatchResponse
   */
  public function CreateBatch(CreateBatch $parameters)
  {
    return $this->__soapCall('CreateBatch', array($parameters));
  }

  /**
   * 
   * @param CancelBatch $parameters
   * @access public
   * @return CancelBatchResponse
   */
  public function CancelBatch(CancelBatch $parameters)
  {
    return $this->__soapCall('CancelBatch', array($parameters));
  }

  /**
   * 
   * @param ExecuteBatch $parameters
   * @access public
   * @return ExecuteBatchResponse
   */
  public function ExecuteBatch(ExecuteBatch $parameters)
  {
    return $this->__soapCall('ExecuteBatch', array($parameters));
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
   * @param CreateLinkedReport $parameters
   * @access public
   * @return CreateLinkedReportResponse
   */
  public function CreateLinkedReport(CreateLinkedReport $parameters)
  {
    return $this->__soapCall('CreateLinkedReport', array($parameters));
  }

  /**
   * 
   * @param GetReportLink $parameters
   * @access public
   * @return GetReportLinkResponse
   */
  public function GetReportLink(GetReportLink $parameters)
  {
    return $this->__soapCall('GetReportLink', array($parameters));
  }

  /**
   * 
   * @param SetReportLink $parameters
   * @access public
   * @return SetReportLinkResponse
   */
  public function SetReportLink(SetReportLink $parameters)
  {
    return $this->__soapCall('SetReportLink', array($parameters));
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
   * @param FindItems $parameters
   * @access public
   * @return FindItemsResponse
   */
  public function FindItems(FindItems $parameters)
  {
    return $this->__soapCall('FindItems', array($parameters));
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
   * @param ListSubscriptions $parameters
   * @access public
   * @return ListSubscriptionsResponse
   */
  public function ListSubscriptions(ListSubscriptions $parameters)
  {
    return $this->__soapCall('ListSubscriptions', array($parameters));
  }

  /**
   * 
   * @param ListSubscriptionsUsingDataSource $parameters
   * @access public
   * @return ListSubscriptionsUsingDataSourceResponse
   */
  public function ListSubscriptionsUsingDataSource(ListSubscriptionsUsingDataSource $parameters)
  {
    return $this->__soapCall('ListSubscriptionsUsingDataSource', array($parameters));
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
   * @param CreateRole $parameters
   * @access public
   * @return CreateRoleResponse
   */
  public function CreateRole(CreateRole $parameters)
  {
    return $this->__soapCall('CreateRole', array($parameters));
  }

  /**
   * 
   * @param DeleteRole $parameters
   * @access public
   * @return DeleteRoleResponse
   */
  public function DeleteRole(DeleteRole $parameters)
  {
    return $this->__soapCall('DeleteRole', array($parameters));
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
   * @param SetRoleProperties $parameters
   * @access public
   * @return SetRolePropertiesResponse
   */
  public function SetRoleProperties(SetRoleProperties $parameters)
  {
    return $this->__soapCall('SetRoleProperties', array($parameters));
  }

  /**
   * 
   * @param GetSystemPolicies $parameters
   * @access public
   * @return GetSystemPoliciesResponse
   */
  public function GetSystemPolicies(GetSystemPolicies $parameters)
  {
    return $this->__soapCall('GetSystemPolicies', array($parameters));
  }

  /**
   * 
   * @param SetSystemPolicies $parameters
   * @access public
   * @return SetSystemPoliciesResponse
   */
  public function SetSystemPolicies(SetSystemPolicies $parameters)
  {
    return $this->__soapCall('SetSystemPolicies', array($parameters));
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
   * @param GetSystemPermissions $parameters
   * @access public
   * @return GetSystemPermissionsResponse
   */
  public function GetSystemPermissions(GetSystemPermissions $parameters)
  {
    return $this->__soapCall('GetSystemPermissions', array($parameters));
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
