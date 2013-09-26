<?php

namespace PhpSsrs\ReportingService2010;


/**
 * The Reporting Services Web Service enables you to manage a report server and its contents including server settings, security, reports, subscriptions, and data sources.
 * 
 */
class ReportingService2010 extends \SoapClient
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'CreateCatalogItem' => '\PhpSsrs\ReportingService2010\CreateCatalogItem',
    'Property' => '\PhpSsrs\ReportingService2010\Property',
    'CreateCatalogItemResponse' => '\PhpSsrs\ReportingService2010\CreateCatalogItemResponse',
    'CatalogItem' => '\PhpSsrs\ReportingService2010\CatalogItem',
    'Warning' => '\PhpSsrs\ReportingService2010\Warning',
    'TrustedUserHeader' => '\PhpSsrs\ReportingService2010\TrustedUserHeader',
    'ServerInfoHeader' => '\PhpSsrs\ReportingService2010\ServerInfoHeader',
    'TimeZoneInformation' => '\PhpSsrs\ReportingService2010\TimeZoneInformation',
    'SYSTEMTIME' => '\PhpSsrs\ReportingService2010\SYSTEMTIME',
    'SetItemDefinition' => '\PhpSsrs\ReportingService2010\SetItemDefinition',
    'SetItemDefinitionResponse' => '\PhpSsrs\ReportingService2010\SetItemDefinitionResponse',
    'GetItemDefinition' => '\PhpSsrs\ReportingService2010\GetItemDefinition',
    'GetItemDefinitionResponse' => '\PhpSsrs\ReportingService2010\GetItemDefinitionResponse',
    'GetItemType' => '\PhpSsrs\ReportingService2010\GetItemType',
    'GetItemTypeResponse' => '\PhpSsrs\ReportingService2010\GetItemTypeResponse',
    'DeleteItem' => '\PhpSsrs\ReportingService2010\DeleteItem',
    'DeleteItemResponse' => '\PhpSsrs\ReportingService2010\DeleteItemResponse',
    'MoveItem' => '\PhpSsrs\ReportingService2010\MoveItem',
    'MoveItemResponse' => '\PhpSsrs\ReportingService2010\MoveItemResponse',
    'InheritParentSecurity' => '\PhpSsrs\ReportingService2010\InheritParentSecurity',
    'InheritParentSecurityResponse' => '\PhpSsrs\ReportingService2010\InheritParentSecurityResponse',
    'ListItemHistory' => '\PhpSsrs\ReportingService2010\ListItemHistory',
    'ListItemHistoryResponse' => '\PhpSsrs\ReportingService2010\ListItemHistoryResponse',
    'ItemHistorySnapshot' => '\PhpSsrs\ReportingService2010\ItemHistorySnapshot',
    'ListChildren' => '\PhpSsrs\ReportingService2010\ListChildren',
    'ListChildrenResponse' => '\PhpSsrs\ReportingService2010\ListChildrenResponse',
    'ListDependentItems' => '\PhpSsrs\ReportingService2010\ListDependentItems',
    'ListDependentItemsResponse' => '\PhpSsrs\ReportingService2010\ListDependentItemsResponse',
    'FindItems' => '\PhpSsrs\ReportingService2010\FindItems',
    'SearchCondition' => '\PhpSsrs\ReportingService2010\SearchCondition',
    'FindItemsResponse' => '\PhpSsrs\ReportingService2010\FindItemsResponse',
    'ListParents' => '\PhpSsrs\ReportingService2010\ListParents',
    'ListParentsResponse' => '\PhpSsrs\ReportingService2010\ListParentsResponse',
    'CreateFolder' => '\PhpSsrs\ReportingService2010\CreateFolder',
    'CreateFolderResponse' => '\PhpSsrs\ReportingService2010\CreateFolderResponse',
    'SetProperties' => '\PhpSsrs\ReportingService2010\SetProperties',
    'SetPropertiesResponse' => '\PhpSsrs\ReportingService2010\SetPropertiesResponse',
    'GetProperties' => '\PhpSsrs\ReportingService2010\GetProperties',
    'GetPropertiesResponse' => '\PhpSsrs\ReportingService2010\GetPropertiesResponse',
    'ItemNamespaceHeader' => '\PhpSsrs\ReportingService2010\ItemNamespaceHeader',
    'SetItemReferences' => '\PhpSsrs\ReportingService2010\SetItemReferences',
    'ItemReference' => '\PhpSsrs\ReportingService2010\ItemReference',
    'SetItemReferencesResponse' => '\PhpSsrs\ReportingService2010\SetItemReferencesResponse',
    'GetItemReferences' => '\PhpSsrs\ReportingService2010\GetItemReferences',
    'GetItemReferencesResponse' => '\PhpSsrs\ReportingService2010\GetItemReferencesResponse',
    'ItemReferenceData' => '\PhpSsrs\ReportingService2010\ItemReferenceData',
    'ListItemTypes' => '\PhpSsrs\ReportingService2010\ListItemTypes',
    'ListItemTypesResponse' => '\PhpSsrs\ReportingService2010\ListItemTypesResponse',
    'SetSubscriptionProperties' => '\PhpSsrs\ReportingService2010\SetSubscriptionProperties',
    'ExtensionSettings' => '\PhpSsrs\ReportingService2010\ExtensionSettings',
    'ParameterValue' => '\PhpSsrs\ReportingService2010\ParameterValue',
    'ParameterValueOrFieldReference' => '\PhpSsrs\ReportingService2010\ParameterValueOrFieldReference',
    'ParameterFieldReference' => '\PhpSsrs\ReportingService2010\ParameterFieldReference',
    'SetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2010\SetSubscriptionPropertiesResponse',
    'GetSubscriptionProperties' => '\PhpSsrs\ReportingService2010\GetSubscriptionProperties',
    'GetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2010\GetSubscriptionPropertiesResponse',
    'ActiveState' => '\PhpSsrs\ReportingService2010\ActiveState',
    'SetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportingService2010\SetDataDrivenSubscriptionProperties',
    'DataRetrievalPlan' => '\PhpSsrs\ReportingService2010\DataRetrievalPlan',
    'DataSourceDefinition' => '\PhpSsrs\ReportingService2010\DataSourceDefinition',
    'DataSourceDefinitionOrReference' => '\PhpSsrs\ReportingService2010\DataSourceDefinitionOrReference',
    'InvalidDataSourceReference' => '\PhpSsrs\ReportingService2010\InvalidDataSourceReference',
    'DataSourceReference' => '\PhpSsrs\ReportingService2010\DataSourceReference',
    'DataSetDefinition' => '\PhpSsrs\ReportingService2010\DataSetDefinition',
    'Field' => '\PhpSsrs\ReportingService2010\Field',
    'QueryDefinition' => '\PhpSsrs\ReportingService2010\QueryDefinition',
    'SetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2010\SetDataDrivenSubscriptionPropertiesResponse',
    'GetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportingService2010\GetDataDrivenSubscriptionProperties',
    'GetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportingService2010\GetDataDrivenSubscriptionPropertiesResponse',
    'DeleteSubscription' => '\PhpSsrs\ReportingService2010\DeleteSubscription',
    'DeleteSubscriptionResponse' => '\PhpSsrs\ReportingService2010\DeleteSubscriptionResponse',
    'CreateSubscription' => '\PhpSsrs\ReportingService2010\CreateSubscription',
    'CreateSubscriptionResponse' => '\PhpSsrs\ReportingService2010\CreateSubscriptionResponse',
    'CreateDataDrivenSubscription' => '\PhpSsrs\ReportingService2010\CreateDataDrivenSubscription',
    'CreateDataDrivenSubscriptionResponse' => '\PhpSsrs\ReportingService2010\CreateDataDrivenSubscriptionResponse',
    'GetExtensionSettings' => '\PhpSsrs\ReportingService2010\GetExtensionSettings',
    'GetExtensionSettingsResponse' => '\PhpSsrs\ReportingService2010\GetExtensionSettingsResponse',
    'ExtensionParameter' => '\PhpSsrs\ReportingService2010\ExtensionParameter',
    'ValidValue' => '\PhpSsrs\ReportingService2010\ValidValue',
    'ValidateExtensionSettings' => '\PhpSsrs\ReportingService2010\ValidateExtensionSettings',
    'ValidateExtensionSettingsResponse' => '\PhpSsrs\ReportingService2010\ValidateExtensionSettingsResponse',
    'ListSubscriptions' => '\PhpSsrs\ReportingService2010\ListSubscriptions',
    'ListSubscriptionsResponse' => '\PhpSsrs\ReportingService2010\ListSubscriptionsResponse',
    'Subscription' => '\PhpSsrs\ReportingService2010\Subscription',
    'ListMySubscriptions' => '\PhpSsrs\ReportingService2010\ListMySubscriptions',
    'ListMySubscriptionsResponse' => '\PhpSsrs\ReportingService2010\ListMySubscriptionsResponse',
    'ListSubscriptionsUsingDataSource' => '\PhpSsrs\ReportingService2010\ListSubscriptionsUsingDataSource',
    'ListSubscriptionsUsingDataSourceResponse' => '\PhpSsrs\ReportingService2010\ListSubscriptionsUsingDataSourceResponse',
    'ChangeSubscriptionOwner' => '\PhpSsrs\ReportingService2010\ChangeSubscriptionOwner',
    'ChangeSubscriptionOwnerResponse' => '\PhpSsrs\ReportingService2010\ChangeSubscriptionOwnerResponse',
    'CreateDataSource' => '\PhpSsrs\ReportingService2010\CreateDataSource',
    'CreateDataSourceResponse' => '\PhpSsrs\ReportingService2010\CreateDataSourceResponse',
    'PrepareQuery' => '\PhpSsrs\ReportingService2010\PrepareQuery',
    'DataSource' => '\PhpSsrs\ReportingService2010\DataSource',
    'PrepareQueryResponse' => '\PhpSsrs\ReportingService2010\PrepareQueryResponse',
    'EnableDataSource' => '\PhpSsrs\ReportingService2010\EnableDataSource',
    'EnableDataSourceResponse' => '\PhpSsrs\ReportingService2010\EnableDataSourceResponse',
    'DisableDataSource' => '\PhpSsrs\ReportingService2010\DisableDataSource',
    'DisableDataSourceResponse' => '\PhpSsrs\ReportingService2010\DisableDataSourceResponse',
    'SetDataSourceContents' => '\PhpSsrs\ReportingService2010\SetDataSourceContents',
    'SetDataSourceContentsResponse' => '\PhpSsrs\ReportingService2010\SetDataSourceContentsResponse',
    'GetDataSourceContents' => '\PhpSsrs\ReportingService2010\GetDataSourceContents',
    'GetDataSourceContentsResponse' => '\PhpSsrs\ReportingService2010\GetDataSourceContentsResponse',
    'ListDatabaseCredentialRetrievalOptions' => '\PhpSsrs\ReportingService2010\ListDatabaseCredentialRetrievalOptions',
    'ListDatabaseCredentialRetrievalOptionsResponse' => '\PhpSsrs\ReportingService2010\ListDatabaseCredentialRetrievalOptionsResponse',
    'SetItemDataSources' => '\PhpSsrs\ReportingService2010\SetItemDataSources',
    'SetItemDataSourcesResponse' => '\PhpSsrs\ReportingService2010\SetItemDataSourcesResponse',
    'GetItemDataSources' => '\PhpSsrs\ReportingService2010\GetItemDataSources',
    'GetItemDataSourcesResponse' => '\PhpSsrs\ReportingService2010\GetItemDataSourcesResponse',
    'TestConnectForDataSourceDefinition' => '\PhpSsrs\ReportingService2010\TestConnectForDataSourceDefinition',
    'TestConnectForDataSourceDefinitionResponse' => '\PhpSsrs\ReportingService2010\TestConnectForDataSourceDefinitionResponse',
    'TestConnectForItemDataSource' => '\PhpSsrs\ReportingService2010\TestConnectForItemDataSource',
    'TestConnectForItemDataSourceResponse' => '\PhpSsrs\ReportingService2010\TestConnectForItemDataSourceResponse',
    'CreateRole' => '\PhpSsrs\ReportingService2010\CreateRole',
    'CreateRoleResponse' => '\PhpSsrs\ReportingService2010\CreateRoleResponse',
    'SetRoleProperties' => '\PhpSsrs\ReportingService2010\SetRoleProperties',
    'SetRolePropertiesResponse' => '\PhpSsrs\ReportingService2010\SetRolePropertiesResponse',
    'GetRoleProperties' => '\PhpSsrs\ReportingService2010\GetRoleProperties',
    'GetRolePropertiesResponse' => '\PhpSsrs\ReportingService2010\GetRolePropertiesResponse',
    'DeleteRole' => '\PhpSsrs\ReportingService2010\DeleteRole',
    'DeleteRoleResponse' => '\PhpSsrs\ReportingService2010\DeleteRoleResponse',
    'ListRoles' => '\PhpSsrs\ReportingService2010\ListRoles',
    'ListRolesResponse' => '\PhpSsrs\ReportingService2010\ListRolesResponse',
    'Role' => '\PhpSsrs\ReportingService2010\Role',
    'ListTasks' => '\PhpSsrs\ReportingService2010\ListTasks',
    'ListTasksResponse' => '\PhpSsrs\ReportingService2010\ListTasksResponse',
    'Task' => '\PhpSsrs\ReportingService2010\Task',
    'SetPolicies' => '\PhpSsrs\ReportingService2010\SetPolicies',
    'Policy' => '\PhpSsrs\ReportingService2010\Policy',
    'SetPoliciesResponse' => '\PhpSsrs\ReportingService2010\SetPoliciesResponse',
    'GetPolicies' => '\PhpSsrs\ReportingService2010\GetPolicies',
    'GetPoliciesResponse' => '\PhpSsrs\ReportingService2010\GetPoliciesResponse',
    'GetItemDataSourcePrompts' => '\PhpSsrs\ReportingService2010\GetItemDataSourcePrompts',
    'GetItemDataSourcePromptsResponse' => '\PhpSsrs\ReportingService2010\GetItemDataSourcePromptsResponse',
    'DataSourcePrompt' => '\PhpSsrs\ReportingService2010\DataSourcePrompt',
    'GenerateModel' => '\PhpSsrs\ReportingService2010\GenerateModel',
    'GenerateModelResponse' => '\PhpSsrs\ReportingService2010\GenerateModelResponse',
    'GetModelItemPermissions' => '\PhpSsrs\ReportingService2010\GetModelItemPermissions',
    'GetModelItemPermissionsResponse' => '\PhpSsrs\ReportingService2010\GetModelItemPermissionsResponse',
    'SetModelItemPolicies' => '\PhpSsrs\ReportingService2010\SetModelItemPolicies',
    'SetModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2010\SetModelItemPoliciesResponse',
    'GetModelItemPolicies' => '\PhpSsrs\ReportingService2010\GetModelItemPolicies',
    'GetModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2010\GetModelItemPoliciesResponse',
    'GetUserModel' => '\PhpSsrs\ReportingService2010\GetUserModel',
    'GetUserModelResponse' => '\PhpSsrs\ReportingService2010\GetUserModelResponse',
    'InheritModelItemParentSecurity' => '\PhpSsrs\ReportingService2010\InheritModelItemParentSecurity',
    'InheritModelItemParentSecurityResponse' => '\PhpSsrs\ReportingService2010\InheritModelItemParentSecurityResponse',
    'SetModelDrillthroughReports' => '\PhpSsrs\ReportingService2010\SetModelDrillthroughReports',
    'ModelDrillthroughReport' => '\PhpSsrs\ReportingService2010\ModelDrillthroughReport',
    'SetModelDrillthroughReportsResponse' => '\PhpSsrs\ReportingService2010\SetModelDrillthroughReportsResponse',
    'ListModelDrillthroughReports' => '\PhpSsrs\ReportingService2010\ListModelDrillthroughReports',
    'ListModelDrillthroughReportsResponse' => '\PhpSsrs\ReportingService2010\ListModelDrillthroughReportsResponse',
    'ListModelItemChildren' => '\PhpSsrs\ReportingService2010\ListModelItemChildren',
    'ListModelItemChildrenResponse' => '\PhpSsrs\ReportingService2010\ListModelItemChildrenResponse',
    'ModelItem' => '\PhpSsrs\ReportingService2010\ModelItem',
    'ListModelItemTypes' => '\PhpSsrs\ReportingService2010\ListModelItemTypes',
    'ListModelItemTypesResponse' => '\PhpSsrs\ReportingService2010\ListModelItemTypesResponse',
    'ListModelPerspectives' => '\PhpSsrs\ReportingService2010\ListModelPerspectives',
    'ListModelPerspectivesResponse' => '\PhpSsrs\ReportingService2010\ListModelPerspectivesResponse',
    'ModelCatalogItem' => '\PhpSsrs\ReportingService2010\ModelCatalogItem',
    'ModelPerspective' => '\PhpSsrs\ReportingService2010\ModelPerspective',
    'RegenerateModel' => '\PhpSsrs\ReportingService2010\RegenerateModel',
    'RegenerateModelResponse' => '\PhpSsrs\ReportingService2010\RegenerateModelResponse',
    'RemoveAllModelItemPolicies' => '\PhpSsrs\ReportingService2010\RemoveAllModelItemPolicies',
    'RemoveAllModelItemPoliciesResponse' => '\PhpSsrs\ReportingService2010\RemoveAllModelItemPoliciesResponse',
    'CreateSchedule' => '\PhpSsrs\ReportingService2010\CreateSchedule',
    'ScheduleDefinition' => '\PhpSsrs\ReportingService2010\ScheduleDefinition',
    'ScheduleDefinitionOrReference' => '\PhpSsrs\ReportingService2010\ScheduleDefinitionOrReference',
    'MonthlyRecurrence' => '\PhpSsrs\ReportingService2010\MonthlyRecurrence',
    'RecurrencePattern' => '\PhpSsrs\ReportingService2010\RecurrencePattern',
    'MonthlyDOWRecurrence' => '\PhpSsrs\ReportingService2010\MonthlyDOWRecurrence',
    'DaysOfWeekSelector' => '\PhpSsrs\ReportingService2010\DaysOfWeekSelector',
    'MonthsOfYearSelector' => '\PhpSsrs\ReportingService2010\MonthsOfYearSelector',
    'WeeklyRecurrence' => '\PhpSsrs\ReportingService2010\WeeklyRecurrence',
    'DailyRecurrence' => '\PhpSsrs\ReportingService2010\DailyRecurrence',
    'MinuteRecurrence' => '\PhpSsrs\ReportingService2010\MinuteRecurrence',
    'CreateScheduleResponse' => '\PhpSsrs\ReportingService2010\CreateScheduleResponse',
    'DeleteSchedule' => '\PhpSsrs\ReportingService2010\DeleteSchedule',
    'DeleteScheduleResponse' => '\PhpSsrs\ReportingService2010\DeleteScheduleResponse',
    'ListSchedules' => '\PhpSsrs\ReportingService2010\ListSchedules',
    'ListSchedulesResponse' => '\PhpSsrs\ReportingService2010\ListSchedulesResponse',
    'Schedule' => '\PhpSsrs\ReportingService2010\Schedule',
    'GetScheduleProperties' => '\PhpSsrs\ReportingService2010\GetScheduleProperties',
    'GetSchedulePropertiesResponse' => '\PhpSsrs\ReportingService2010\GetSchedulePropertiesResponse',
    'ListScheduleStates' => '\PhpSsrs\ReportingService2010\ListScheduleStates',
    'ListScheduleStatesResponse' => '\PhpSsrs\ReportingService2010\ListScheduleStatesResponse',
    'PauseSchedule' => '\PhpSsrs\ReportingService2010\PauseSchedule',
    'PauseScheduleResponse' => '\PhpSsrs\ReportingService2010\PauseScheduleResponse',
    'ResumeSchedule' => '\PhpSsrs\ReportingService2010\ResumeSchedule',
    'ResumeScheduleResponse' => '\PhpSsrs\ReportingService2010\ResumeScheduleResponse',
    'SetScheduleProperties' => '\PhpSsrs\ReportingService2010\SetScheduleProperties',
    'SetSchedulePropertiesResponse' => '\PhpSsrs\ReportingService2010\SetSchedulePropertiesResponse',
    'ListScheduledItems' => '\PhpSsrs\ReportingService2010\ListScheduledItems',
    'ListScheduledItemsResponse' => '\PhpSsrs\ReportingService2010\ListScheduledItemsResponse',
    'SetItemParameters' => '\PhpSsrs\ReportingService2010\SetItemParameters',
    'ItemParameter' => '\PhpSsrs\ReportingService2010\ItemParameter',
    'SetItemParametersResponse' => '\PhpSsrs\ReportingService2010\SetItemParametersResponse',
    'GetItemParameters' => '\PhpSsrs\ReportingService2010\GetItemParameters',
    'DataSourceCredentials' => '\PhpSsrs\ReportingService2010\DataSourceCredentials',
    'GetItemParametersResponse' => '\PhpSsrs\ReportingService2010\GetItemParametersResponse',
    'ListParameterTypes' => '\PhpSsrs\ReportingService2010\ListParameterTypes',
    'ListParameterTypesResponse' => '\PhpSsrs\ReportingService2010\ListParameterTypesResponse',
    'ListParameterStates' => '\PhpSsrs\ReportingService2010\ListParameterStates',
    'ListParameterStatesResponse' => '\PhpSsrs\ReportingService2010\ListParameterStatesResponse',
    'CreateReportEditSession' => '\PhpSsrs\ReportingService2010\CreateReportEditSession',
    'CreateReportEditSessionResponse' => '\PhpSsrs\ReportingService2010\CreateReportEditSessionResponse',
    'CreateLinkedItem' => '\PhpSsrs\ReportingService2010\CreateLinkedItem',
    'CreateLinkedItemResponse' => '\PhpSsrs\ReportingService2010\CreateLinkedItemResponse',
    'SetItemLink' => '\PhpSsrs\ReportingService2010\SetItemLink',
    'SetItemLinkResponse' => '\PhpSsrs\ReportingService2010\SetItemLinkResponse',
    'GetItemLink' => '\PhpSsrs\ReportingService2010\GetItemLink',
    'GetItemLinkResponse' => '\PhpSsrs\ReportingService2010\GetItemLinkResponse',
    'ListExecutionSettings' => '\PhpSsrs\ReportingService2010\ListExecutionSettings',
    'ListExecutionSettingsResponse' => '\PhpSsrs\ReportingService2010\ListExecutionSettingsResponse',
    'SetExecutionOptions' => '\PhpSsrs\ReportingService2010\SetExecutionOptions',
    'NoSchedule' => '\PhpSsrs\ReportingService2010\NoSchedule',
    'ScheduleReference' => '\PhpSsrs\ReportingService2010\ScheduleReference',
    'SetExecutionOptionsResponse' => '\PhpSsrs\ReportingService2010\SetExecutionOptionsResponse',
    'GetExecutionOptions' => '\PhpSsrs\ReportingService2010\GetExecutionOptions',
    'GetExecutionOptionsResponse' => '\PhpSsrs\ReportingService2010\GetExecutionOptionsResponse',
    'UpdateItemExecutionSnapshot' => '\PhpSsrs\ReportingService2010\UpdateItemExecutionSnapshot',
    'UpdateItemExecutionSnapshotResponse' => '\PhpSsrs\ReportingService2010\UpdateItemExecutionSnapshotResponse',
    'SetCacheOptions' => '\PhpSsrs\ReportingService2010\SetCacheOptions',
    'TimeExpiration' => '\PhpSsrs\ReportingService2010\TimeExpiration',
    'ExpirationDefinition' => '\PhpSsrs\ReportingService2010\ExpirationDefinition',
    'ScheduleExpiration' => '\PhpSsrs\ReportingService2010\ScheduleExpiration',
    'SetCacheOptionsResponse' => '\PhpSsrs\ReportingService2010\SetCacheOptionsResponse',
    'GetCacheOptions' => '\PhpSsrs\ReportingService2010\GetCacheOptions',
    'GetCacheOptionsResponse' => '\PhpSsrs\ReportingService2010\GetCacheOptionsResponse',
    'FlushCache' => '\PhpSsrs\ReportingService2010\FlushCache',
    'FlushCacheResponse' => '\PhpSsrs\ReportingService2010\FlushCacheResponse',
    'CreateItemHistorySnapshot' => '\PhpSsrs\ReportingService2010\CreateItemHistorySnapshot',
    'CreateItemHistorySnapshotResponse' => '\PhpSsrs\ReportingService2010\CreateItemHistorySnapshotResponse',
    'DeleteItemHistorySnapshot' => '\PhpSsrs\ReportingService2010\DeleteItemHistorySnapshot',
    'DeleteItemHistorySnapshotResponse' => '\PhpSsrs\ReportingService2010\DeleteItemHistorySnapshotResponse',
    'SetItemHistoryLimit' => '\PhpSsrs\ReportingService2010\SetItemHistoryLimit',
    'SetItemHistoryLimitResponse' => '\PhpSsrs\ReportingService2010\SetItemHistoryLimitResponse',
    'GetItemHistoryLimit' => '\PhpSsrs\ReportingService2010\GetItemHistoryLimit',
    'GetItemHistoryLimitResponse' => '\PhpSsrs\ReportingService2010\GetItemHistoryLimitResponse',
    'SetItemHistoryOptions' => '\PhpSsrs\ReportingService2010\SetItemHistoryOptions',
    'SetItemHistoryOptionsResponse' => '\PhpSsrs\ReportingService2010\SetItemHistoryOptionsResponse',
    'GetItemHistoryOptions' => '\PhpSsrs\ReportingService2010\GetItemHistoryOptions',
    'GetItemHistoryOptionsResponse' => '\PhpSsrs\ReportingService2010\GetItemHistoryOptionsResponse',
    'GetReportServerConfigInfo' => '\PhpSsrs\ReportingService2010\GetReportServerConfigInfo',
    'GetReportServerConfigInfoResponse' => '\PhpSsrs\ReportingService2010\GetReportServerConfigInfoResponse',
    'IsSSLRequired' => '\PhpSsrs\ReportingService2010\IsSSLRequired',
    'IsSSLRequiredResponse' => '\PhpSsrs\ReportingService2010\IsSSLRequiredResponse',
    'SetSystemProperties' => '\PhpSsrs\ReportingService2010\SetSystemProperties',
    'SetSystemPropertiesResponse' => '\PhpSsrs\ReportingService2010\SetSystemPropertiesResponse',
    'GetSystemProperties' => '\PhpSsrs\ReportingService2010\GetSystemProperties',
    'GetSystemPropertiesResponse' => '\PhpSsrs\ReportingService2010\GetSystemPropertiesResponse',
    'SetSystemPolicies' => '\PhpSsrs\ReportingService2010\SetSystemPolicies',
    'SetSystemPoliciesResponse' => '\PhpSsrs\ReportingService2010\SetSystemPoliciesResponse',
    'GetSystemPolicies' => '\PhpSsrs\ReportingService2010\GetSystemPolicies',
    'GetSystemPoliciesResponse' => '\PhpSsrs\ReportingService2010\GetSystemPoliciesResponse',
    'ListExtensions' => '\PhpSsrs\ReportingService2010\ListExtensions',
    'ListExtensionsResponse' => '\PhpSsrs\ReportingService2010\ListExtensionsResponse',
    'Extension' => '\PhpSsrs\ReportingService2010\Extension',
    'ListExtensionTypes' => '\PhpSsrs\ReportingService2010\ListExtensionTypes',
    'ListExtensionTypesResponse' => '\PhpSsrs\ReportingService2010\ListExtensionTypesResponse',
    'ListEvents' => '\PhpSsrs\ReportingService2010\ListEvents',
    'ListEventsResponse' => '\PhpSsrs\ReportingService2010\ListEventsResponse',
    'Event' => '\PhpSsrs\ReportingService2010\Event',
    'FireEvent' => '\PhpSsrs\ReportingService2010\FireEvent',
    'FireEventResponse' => '\PhpSsrs\ReportingService2010\FireEventResponse',
    'ListJobs' => '\PhpSsrs\ReportingService2010\ListJobs',
    'ListJobsResponse' => '\PhpSsrs\ReportingService2010\ListJobsResponse',
    'Job' => '\PhpSsrs\ReportingService2010\Job',
    'ListJobTypes' => '\PhpSsrs\ReportingService2010\ListJobTypes',
    'ListJobTypesResponse' => '\PhpSsrs\ReportingService2010\ListJobTypesResponse',
    'ListJobActions' => '\PhpSsrs\ReportingService2010\ListJobActions',
    'ListJobActionsResponse' => '\PhpSsrs\ReportingService2010\ListJobActionsResponse',
    'ListJobStates' => '\PhpSsrs\ReportingService2010\ListJobStates',
    'ListJobStatesResponse' => '\PhpSsrs\ReportingService2010\ListJobStatesResponse',
    'CancelJob' => '\PhpSsrs\ReportingService2010\CancelJob',
    'CancelJobResponse' => '\PhpSsrs\ReportingService2010\CancelJobResponse',
    'CreateCacheRefreshPlan' => '\PhpSsrs\ReportingService2010\CreateCacheRefreshPlan',
    'CreateCacheRefreshPlanResponse' => '\PhpSsrs\ReportingService2010\CreateCacheRefreshPlanResponse',
    'SetCacheRefreshPlanProperties' => '\PhpSsrs\ReportingService2010\SetCacheRefreshPlanProperties',
    'SetCacheRefreshPlanPropertiesResponse' => '\PhpSsrs\ReportingService2010\SetCacheRefreshPlanPropertiesResponse',
    'GetCacheRefreshPlanProperties' => '\PhpSsrs\ReportingService2010\GetCacheRefreshPlanProperties',
    'GetCacheRefreshPlanPropertiesResponse' => '\PhpSsrs\ReportingService2010\GetCacheRefreshPlanPropertiesResponse',
    'CacheRefreshPlanState' => '\PhpSsrs\ReportingService2010\CacheRefreshPlanState',
    'DeleteCacheRefreshPlan' => '\PhpSsrs\ReportingService2010\DeleteCacheRefreshPlan',
    'DeleteCacheRefreshPlanResponse' => '\PhpSsrs\ReportingService2010\DeleteCacheRefreshPlanResponse',
    'ListCacheRefreshPlans' => '\PhpSsrs\ReportingService2010\ListCacheRefreshPlans',
    'ListCacheRefreshPlansResponse' => '\PhpSsrs\ReportingService2010\ListCacheRefreshPlansResponse',
    'CacheRefreshPlan' => '\PhpSsrs\ReportingService2010\CacheRefreshPlan',
    'LogonUser' => '\PhpSsrs\ReportingService2010\LogonUser',
    'LogonUserResponse' => '\PhpSsrs\ReportingService2010\LogonUserResponse',
    'Logoff' => '\PhpSsrs\ReportingService2010\Logoff',
    'LogoffResponse' => '\PhpSsrs\ReportingService2010\LogoffResponse',
    'GetPermissions' => '\PhpSsrs\ReportingService2010\GetPermissions',
    'GetPermissionsResponse' => '\PhpSsrs\ReportingService2010\GetPermissionsResponse',
    'GetSystemPermissions' => '\PhpSsrs\ReportingService2010\GetSystemPermissions',
    'GetSystemPermissionsResponse' => '\PhpSsrs\ReportingService2010\GetSystemPermissionsResponse',
    'ListSecurityScopes' => '\PhpSsrs\ReportingService2010\ListSecurityScopes',
    'ListSecurityScopesResponse' => '\PhpSsrs\ReportingService2010\ListSecurityScopesResponse');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'wsdl/ReportService2010.wsdl')
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
   * @param CreateCatalogItem $parameters
   * @access public
   * @return CreateCatalogItemResponse
   */
  public function CreateCatalogItem(CreateCatalogItem $parameters)
  {
    return $this->__soapCall('CreateCatalogItem', array($parameters));
  }

  /**
   * 
   * @param SetItemDefinition $parameters
   * @access public
   * @return SetItemDefinitionResponse
   */
  public function SetItemDefinition(SetItemDefinition $parameters)
  {
    return $this->__soapCall('SetItemDefinition', array($parameters));
  }

  /**
   * 
   * @param GetItemDefinition $parameters
   * @access public
   * @return GetItemDefinitionResponse
   */
  public function GetItemDefinition(GetItemDefinition $parameters)
  {
    return $this->__soapCall('GetItemDefinition', array($parameters));
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
   * @param ListItemHistory $parameters
   * @access public
   * @return ListItemHistoryResponse
   */
  public function ListItemHistory(ListItemHistory $parameters)
  {
    return $this->__soapCall('ListItemHistory', array($parameters));
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
   * @param SetItemReferences $parameters
   * @access public
   * @return SetItemReferencesResponse
   */
  public function SetItemReferences(SetItemReferences $parameters)
  {
    return $this->__soapCall('SetItemReferences', array($parameters));
  }

  /**
   * 
   * @param GetItemReferences $parameters
   * @access public
   * @return GetItemReferencesResponse
   */
  public function GetItemReferences(GetItemReferences $parameters)
  {
    return $this->__soapCall('GetItemReferences', array($parameters));
  }

  /**
   * 
   * @param ListItemTypes $parameters
   * @access public
   * @return ListItemTypesResponse
   */
  public function ListItemTypes(ListItemTypes $parameters)
  {
    return $this->__soapCall('ListItemTypes', array($parameters));
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
   * @param ChangeSubscriptionOwner $parameters
   * @access public
   * @return ChangeSubscriptionOwnerResponse
   */
  public function ChangeSubscriptionOwner(ChangeSubscriptionOwner $parameters)
  {
    return $this->__soapCall('ChangeSubscriptionOwner', array($parameters));
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
   * @param ListDatabaseCredentialRetrievalOptions $parameters
   * @access public
   * @return ListDatabaseCredentialRetrievalOptionsResponse
   */
  public function ListDatabaseCredentialRetrievalOptions(ListDatabaseCredentialRetrievalOptions $parameters)
  {
    return $this->__soapCall('ListDatabaseCredentialRetrievalOptions', array($parameters));
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
   * @param TestConnectForDataSourceDefinition $parameters
   * @access public
   * @return TestConnectForDataSourceDefinitionResponse
   */
  public function TestConnectForDataSourceDefinition(TestConnectForDataSourceDefinition $parameters)
  {
    return $this->__soapCall('TestConnectForDataSourceDefinition', array($parameters));
  }

  /**
   * 
   * @param TestConnectForItemDataSource $parameters
   * @access public
   * @return TestConnectForItemDataSourceResponse
   */
  public function TestConnectForItemDataSource(TestConnectForItemDataSource $parameters)
  {
    return $this->__soapCall('TestConnectForItemDataSource', array($parameters));
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
   * @param ListModelItemTypes $parameters
   * @access public
   * @return ListModelItemTypesResponse
   */
  public function ListModelItemTypes(ListModelItemTypes $parameters)
  {
    return $this->__soapCall('ListModelItemTypes', array($parameters));
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
   * @param RegenerateModel $parameters
   * @access public
   * @return RegenerateModelResponse
   */
  public function RegenerateModel(RegenerateModel $parameters)
  {
    return $this->__soapCall('RegenerateModel', array($parameters));
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
   * @param ListScheduleStates $parameters
   * @access public
   * @return ListScheduleStatesResponse
   */
  public function ListScheduleStates(ListScheduleStates $parameters)
  {
    return $this->__soapCall('ListScheduleStates', array($parameters));
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
   * @param ListScheduledItems $parameters
   * @access public
   * @return ListScheduledItemsResponse
   */
  public function ListScheduledItems(ListScheduledItems $parameters)
  {
    return $this->__soapCall('ListScheduledItems', array($parameters));
  }

  /**
   * 
   * @param SetItemParameters $parameters
   * @access public
   * @return SetItemParametersResponse
   */
  public function SetItemParameters(SetItemParameters $parameters)
  {
    return $this->__soapCall('SetItemParameters', array($parameters));
  }

  /**
   * 
   * @param GetItemParameters $parameters
   * @access public
   * @return GetItemParametersResponse
   */
  public function GetItemParameters(GetItemParameters $parameters)
  {
    return $this->__soapCall('GetItemParameters', array($parameters));
  }

  /**
   * 
   * @param ListParameterTypes $parameters
   * @access public
   * @return ListParameterTypesResponse
   */
  public function ListParameterTypes(ListParameterTypes $parameters)
  {
    return $this->__soapCall('ListParameterTypes', array($parameters));
  }

  /**
   * 
   * @param ListParameterStates $parameters
   * @access public
   * @return ListParameterStatesResponse
   */
  public function ListParameterStates(ListParameterStates $parameters)
  {
    return $this->__soapCall('ListParameterStates', array($parameters));
  }

  /**
   * 
   * @param CreateReportEditSession $parameters
   * @access public
   * @return CreateReportEditSessionResponse
   */
  public function CreateReportEditSession(CreateReportEditSession $parameters)
  {
    return $this->__soapCall('CreateReportEditSession', array($parameters));
  }

  /**
   * 
   * @param CreateLinkedItem $parameters
   * @access public
   * @return CreateLinkedItemResponse
   */
  public function CreateLinkedItem(CreateLinkedItem $parameters)
  {
    return $this->__soapCall('CreateLinkedItem', array($parameters));
  }

  /**
   * 
   * @param SetItemLink $parameters
   * @access public
   * @return SetItemLinkResponse
   */
  public function SetItemLink(SetItemLink $parameters)
  {
    return $this->__soapCall('SetItemLink', array($parameters));
  }

  /**
   * 
   * @param GetItemLink $parameters
   * @access public
   * @return GetItemLinkResponse
   */
  public function GetItemLink(GetItemLink $parameters)
  {
    return $this->__soapCall('GetItemLink', array($parameters));
  }

  /**
   * 
   * @param ListExecutionSettings $parameters
   * @access public
   * @return ListExecutionSettingsResponse
   */
  public function ListExecutionSettings(ListExecutionSettings $parameters)
  {
    return $this->__soapCall('ListExecutionSettings', array($parameters));
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
   * @param UpdateItemExecutionSnapshot $parameters
   * @access public
   * @return UpdateItemExecutionSnapshotResponse
   */
  public function UpdateItemExecutionSnapshot(UpdateItemExecutionSnapshot $parameters)
  {
    return $this->__soapCall('UpdateItemExecutionSnapshot', array($parameters));
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
   * @param CreateItemHistorySnapshot $parameters
   * @access public
   * @return CreateItemHistorySnapshotResponse
   */
  public function CreateItemHistorySnapshot(CreateItemHistorySnapshot $parameters)
  {
    return $this->__soapCall('CreateItemHistorySnapshot', array($parameters));
  }

  /**
   * 
   * @param DeleteItemHistorySnapshot $parameters
   * @access public
   * @return DeleteItemHistorySnapshotResponse
   */
  public function DeleteItemHistorySnapshot(DeleteItemHistorySnapshot $parameters)
  {
    return $this->__soapCall('DeleteItemHistorySnapshot', array($parameters));
  }

  /**
   * 
   * @param SetItemHistoryLimit $parameters
   * @access public
   * @return SetItemHistoryLimitResponse
   */
  public function SetItemHistoryLimit(SetItemHistoryLimit $parameters)
  {
    return $this->__soapCall('SetItemHistoryLimit', array($parameters));
  }

  /**
   * 
   * @param GetItemHistoryLimit $parameters
   * @access public
   * @return GetItemHistoryLimitResponse
   */
  public function GetItemHistoryLimit(GetItemHistoryLimit $parameters)
  {
    return $this->__soapCall('GetItemHistoryLimit', array($parameters));
  }

  /**
   * 
   * @param SetItemHistoryOptions $parameters
   * @access public
   * @return SetItemHistoryOptionsResponse
   */
  public function SetItemHistoryOptions(SetItemHistoryOptions $parameters)
  {
    return $this->__soapCall('SetItemHistoryOptions', array($parameters));
  }

  /**
   * 
   * @param GetItemHistoryOptions $parameters
   * @access public
   * @return GetItemHistoryOptionsResponse
   */
  public function GetItemHistoryOptions(GetItemHistoryOptions $parameters)
  {
    return $this->__soapCall('GetItemHistoryOptions', array($parameters));
  }

  /**
   * 
   * @param GetReportServerConfigInfo $parameters
   * @access public
   * @return GetReportServerConfigInfoResponse
   */
  public function GetReportServerConfigInfo(GetReportServerConfigInfo $parameters)
  {
    return $this->__soapCall('GetReportServerConfigInfo', array($parameters));
  }

  /**
   * 
   * @param IsSSLRequired $parameters
   * @access public
   * @return IsSSLRequiredResponse
   */
  public function IsSSLRequired(IsSSLRequired $parameters)
  {
    return $this->__soapCall('IsSSLRequired', array($parameters));
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
   * @param ListExtensionTypes $parameters
   * @access public
   * @return ListExtensionTypesResponse
   */
  public function ListExtensionTypes(ListExtensionTypes $parameters)
  {
    return $this->__soapCall('ListExtensionTypes', array($parameters));
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
   * @param ListJobTypes $parameters
   * @access public
   * @return ListJobTypesResponse
   */
  public function ListJobTypes(ListJobTypes $parameters)
  {
    return $this->__soapCall('ListJobTypes', array($parameters));
  }

  /**
   * 
   * @param ListJobActions $parameters
   * @access public
   * @return ListJobActionsResponse
   */
  public function ListJobActions(ListJobActions $parameters)
  {
    return $this->__soapCall('ListJobActions', array($parameters));
  }

  /**
   * 
   * @param ListJobStates $parameters
   * @access public
   * @return ListJobStatesResponse
   */
  public function ListJobStates(ListJobStates $parameters)
  {
    return $this->__soapCall('ListJobStates', array($parameters));
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
   * @param CreateCacheRefreshPlan $parameters
   * @access public
   * @return CreateCacheRefreshPlanResponse
   */
  public function CreateCacheRefreshPlan(CreateCacheRefreshPlan $parameters)
  {
    return $this->__soapCall('CreateCacheRefreshPlan', array($parameters));
  }

  /**
   * 
   * @param SetCacheRefreshPlanProperties $parameters
   * @access public
   * @return SetCacheRefreshPlanPropertiesResponse
   */
  public function SetCacheRefreshPlanProperties(SetCacheRefreshPlanProperties $parameters)
  {
    return $this->__soapCall('SetCacheRefreshPlanProperties', array($parameters));
  }

  /**
   * 
   * @param GetCacheRefreshPlanProperties $parameters
   * @access public
   * @return GetCacheRefreshPlanPropertiesResponse
   */
  public function GetCacheRefreshPlanProperties(GetCacheRefreshPlanProperties $parameters)
  {
    return $this->__soapCall('GetCacheRefreshPlanProperties', array($parameters));
  }

  /**
   * 
   * @param DeleteCacheRefreshPlan $parameters
   * @access public
   * @return DeleteCacheRefreshPlanResponse
   */
  public function DeleteCacheRefreshPlan(DeleteCacheRefreshPlan $parameters)
  {
    return $this->__soapCall('DeleteCacheRefreshPlan', array($parameters));
  }

  /**
   * 
   * @param ListCacheRefreshPlans $parameters
   * @access public
   * @return ListCacheRefreshPlansResponse
   */
  public function ListCacheRefreshPlans(ListCacheRefreshPlans $parameters)
  {
    return $this->__soapCall('ListCacheRefreshPlans', array($parameters));
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
   * @param ListSecurityScopes $parameters
   * @access public
   * @return ListSecurityScopesResponse
   */
  public function ListSecurityScopes(ListSecurityScopes $parameters)
  {
    return $this->__soapCall('ListSecurityScopes', array($parameters));
  }

}
