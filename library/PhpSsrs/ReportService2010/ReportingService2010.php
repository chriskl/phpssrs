<?php

namespace PhpSsrs\ReportService2010;

include_once('CreateCatalogItem.php');
include_once('Property.php');
include_once('CreateCatalogItemResponse.php');
include_once('CatalogItem.php');
include_once('Warning.php');
include_once('TrustedUserHeader.php');
include_once('ServerInfoHeader.php');
include_once('TimeZoneInformation.php');
include_once('SYSTEMTIME.php');
include_once('SetItemDefinition.php');
include_once('SetItemDefinitionResponse.php');
include_once('GetItemDefinition.php');
include_once('GetItemDefinitionResponse.php');
include_once('GetItemType.php');
include_once('GetItemTypeResponse.php');
include_once('DeleteItem.php');
include_once('DeleteItemResponse.php');
include_once('MoveItem.php');
include_once('MoveItemResponse.php');
include_once('InheritParentSecurity.php');
include_once('InheritParentSecurityResponse.php');
include_once('ListItemHistory.php');
include_once('ListItemHistoryResponse.php');
include_once('ItemHistorySnapshot.php');
include_once('ListChildren.php');
include_once('ListChildrenResponse.php');
include_once('ListDependentItems.php');
include_once('ListDependentItemsResponse.php');
include_once('FindItems.php');
include_once('SearchCondition.php');
include_once('FindItemsResponse.php');
include_once('ListParents.php');
include_once('ListParentsResponse.php');
include_once('CreateFolder.php');
include_once('CreateFolderResponse.php');
include_once('SetProperties.php');
include_once('SetPropertiesResponse.php');
include_once('GetProperties.php');
include_once('GetPropertiesResponse.php');
include_once('ItemNamespaceHeader.php');
include_once('SetItemReferences.php');
include_once('ItemReference.php');
include_once('SetItemReferencesResponse.php');
include_once('GetItemReferences.php');
include_once('GetItemReferencesResponse.php');
include_once('ItemReferenceData.php');
include_once('ListItemTypes.php');
include_once('ListItemTypesResponse.php');
include_once('SetSubscriptionProperties.php');
include_once('ExtensionSettings.php');
include_once('ParameterValue.php');
include_once('ParameterValueOrFieldReference.php');
include_once('ParameterFieldReference.php');
include_once('SetSubscriptionPropertiesResponse.php');
include_once('GetSubscriptionProperties.php');
include_once('GetSubscriptionPropertiesResponse.php');
include_once('ActiveState.php');
include_once('SetDataDrivenSubscriptionProperties.php');
include_once('DataRetrievalPlan.php');
include_once('DataSourceDefinition.php');
include_once('DataSourceDefinitionOrReference.php');
include_once('InvalidDataSourceReference.php');
include_once('DataSourceReference.php');
include_once('DataSetDefinition.php');
include_once('Field.php');
include_once('QueryDefinition.php');
include_once('SetDataDrivenSubscriptionPropertiesResponse.php');
include_once('GetDataDrivenSubscriptionProperties.php');
include_once('GetDataDrivenSubscriptionPropertiesResponse.php');
include_once('DeleteSubscription.php');
include_once('DeleteSubscriptionResponse.php');
include_once('CreateSubscription.php');
include_once('CreateSubscriptionResponse.php');
include_once('CreateDataDrivenSubscription.php');
include_once('CreateDataDrivenSubscriptionResponse.php');
include_once('GetExtensionSettings.php');
include_once('GetExtensionSettingsResponse.php');
include_once('ExtensionParameter.php');
include_once('ValidValue.php');
include_once('ValidateExtensionSettings.php');
include_once('ValidateExtensionSettingsResponse.php');
include_once('ListSubscriptions.php');
include_once('ListSubscriptionsResponse.php');
include_once('Subscription.php');
include_once('ListMySubscriptions.php');
include_once('ListMySubscriptionsResponse.php');
include_once('ListSubscriptionsUsingDataSource.php');
include_once('ListSubscriptionsUsingDataSourceResponse.php');
include_once('ChangeSubscriptionOwner.php');
include_once('ChangeSubscriptionOwnerResponse.php');
include_once('CreateDataSource.php');
include_once('CreateDataSourceResponse.php');
include_once('PrepareQuery.php');
include_once('DataSource.php');
include_once('PrepareQueryResponse.php');
include_once('EnableDataSource.php');
include_once('EnableDataSourceResponse.php');
include_once('DisableDataSource.php');
include_once('DisableDataSourceResponse.php');
include_once('SetDataSourceContents.php');
include_once('SetDataSourceContentsResponse.php');
include_once('GetDataSourceContents.php');
include_once('GetDataSourceContentsResponse.php');
include_once('ListDatabaseCredentialRetrievalOptions.php');
include_once('ListDatabaseCredentialRetrievalOptionsResponse.php');
include_once('SetItemDataSources.php');
include_once('SetItemDataSourcesResponse.php');
include_once('GetItemDataSources.php');
include_once('GetItemDataSourcesResponse.php');
include_once('TestConnectForDataSourceDefinition.php');
include_once('TestConnectForDataSourceDefinitionResponse.php');
include_once('TestConnectForItemDataSource.php');
include_once('TestConnectForItemDataSourceResponse.php');
include_once('CreateRole.php');
include_once('CreateRoleResponse.php');
include_once('SetRoleProperties.php');
include_once('SetRolePropertiesResponse.php');
include_once('GetRoleProperties.php');
include_once('GetRolePropertiesResponse.php');
include_once('DeleteRole.php');
include_once('DeleteRoleResponse.php');
include_once('ListRoles.php');
include_once('ListRolesResponse.php');
include_once('Role.php');
include_once('ListTasks.php');
include_once('ListTasksResponse.php');
include_once('Task.php');
include_once('SetPolicies.php');
include_once('Policy.php');
include_once('SetPoliciesResponse.php');
include_once('GetPolicies.php');
include_once('GetPoliciesResponse.php');
include_once('GetItemDataSourcePrompts.php');
include_once('GetItemDataSourcePromptsResponse.php');
include_once('DataSourcePrompt.php');
include_once('GenerateModel.php');
include_once('GenerateModelResponse.php');
include_once('GetModelItemPermissions.php');
include_once('GetModelItemPermissionsResponse.php');
include_once('SetModelItemPolicies.php');
include_once('SetModelItemPoliciesResponse.php');
include_once('GetModelItemPolicies.php');
include_once('GetModelItemPoliciesResponse.php');
include_once('GetUserModel.php');
include_once('GetUserModelResponse.php');
include_once('InheritModelItemParentSecurity.php');
include_once('InheritModelItemParentSecurityResponse.php');
include_once('SetModelDrillthroughReports.php');
include_once('ModelDrillthroughReport.php');
include_once('SetModelDrillthroughReportsResponse.php');
include_once('ListModelDrillthroughReports.php');
include_once('ListModelDrillthroughReportsResponse.php');
include_once('ListModelItemChildren.php');
include_once('ListModelItemChildrenResponse.php');
include_once('ModelItem.php');
include_once('ListModelItemTypes.php');
include_once('ListModelItemTypesResponse.php');
include_once('ListModelPerspectives.php');
include_once('ListModelPerspectivesResponse.php');
include_once('ModelCatalogItem.php');
include_once('ModelPerspective.php');
include_once('RegenerateModel.php');
include_once('RegenerateModelResponse.php');
include_once('RemoveAllModelItemPolicies.php');
include_once('RemoveAllModelItemPoliciesResponse.php');
include_once('CreateSchedule.php');
include_once('ScheduleDefinition.php');
include_once('ScheduleDefinitionOrReference.php');
include_once('MonthlyRecurrence.php');
include_once('RecurrencePattern.php');
include_once('MonthlyDOWRecurrence.php');
include_once('DaysOfWeekSelector.php');
include_once('MonthsOfYearSelector.php');
include_once('WeeklyRecurrence.php');
include_once('DailyRecurrence.php');
include_once('MinuteRecurrence.php');
include_once('CreateScheduleResponse.php');
include_once('DeleteSchedule.php');
include_once('DeleteScheduleResponse.php');
include_once('ListSchedules.php');
include_once('ListSchedulesResponse.php');
include_once('Schedule.php');
include_once('GetScheduleProperties.php');
include_once('GetSchedulePropertiesResponse.php');
include_once('ListScheduleStates.php');
include_once('ListScheduleStatesResponse.php');
include_once('PauseSchedule.php');
include_once('PauseScheduleResponse.php');
include_once('ResumeSchedule.php');
include_once('ResumeScheduleResponse.php');
include_once('SetScheduleProperties.php');
include_once('SetSchedulePropertiesResponse.php');
include_once('ListScheduledItems.php');
include_once('ListScheduledItemsResponse.php');
include_once('SetItemParameters.php');
include_once('ItemParameter.php');
include_once('SetItemParametersResponse.php');
include_once('GetItemParameters.php');
include_once('DataSourceCredentials.php');
include_once('GetItemParametersResponse.php');
include_once('ListParameterTypes.php');
include_once('ListParameterTypesResponse.php');
include_once('ListParameterStates.php');
include_once('ListParameterStatesResponse.php');
include_once('CreateReportEditSession.php');
include_once('CreateReportEditSessionResponse.php');
include_once('CreateLinkedItem.php');
include_once('CreateLinkedItemResponse.php');
include_once('SetItemLink.php');
include_once('SetItemLinkResponse.php');
include_once('GetItemLink.php');
include_once('GetItemLinkResponse.php');
include_once('ListExecutionSettings.php');
include_once('ListExecutionSettingsResponse.php');
include_once('SetExecutionOptions.php');
include_once('NoSchedule.php');
include_once('ScheduleReference.php');
include_once('SetExecutionOptionsResponse.php');
include_once('GetExecutionOptions.php');
include_once('GetExecutionOptionsResponse.php');
include_once('UpdateItemExecutionSnapshot.php');
include_once('UpdateItemExecutionSnapshotResponse.php');
include_once('SetCacheOptions.php');
include_once('TimeExpiration.php');
include_once('ExpirationDefinition.php');
include_once('ScheduleExpiration.php');
include_once('SetCacheOptionsResponse.php');
include_once('GetCacheOptions.php');
include_once('GetCacheOptionsResponse.php');
include_once('FlushCache.php');
include_once('FlushCacheResponse.php');
include_once('CreateItemHistorySnapshot.php');
include_once('CreateItemHistorySnapshotResponse.php');
include_once('DeleteItemHistorySnapshot.php');
include_once('DeleteItemHistorySnapshotResponse.php');
include_once('SetItemHistoryLimit.php');
include_once('SetItemHistoryLimitResponse.php');
include_once('GetItemHistoryLimit.php');
include_once('GetItemHistoryLimitResponse.php');
include_once('SetItemHistoryOptions.php');
include_once('SetItemHistoryOptionsResponse.php');
include_once('GetItemHistoryOptions.php');
include_once('GetItemHistoryOptionsResponse.php');
include_once('GetReportServerConfigInfo.php');
include_once('GetReportServerConfigInfoResponse.php');
include_once('IsSSLRequired.php');
include_once('IsSSLRequiredResponse.php');
include_once('SetSystemProperties.php');
include_once('SetSystemPropertiesResponse.php');
include_once('GetSystemProperties.php');
include_once('GetSystemPropertiesResponse.php');
include_once('SetSystemPolicies.php');
include_once('SetSystemPoliciesResponse.php');
include_once('GetSystemPolicies.php');
include_once('GetSystemPoliciesResponse.php');
include_once('ListExtensions.php');
include_once('ListExtensionsResponse.php');
include_once('Extension.php');
include_once('ListExtensionTypes.php');
include_once('ListExtensionTypesResponse.php');
include_once('ListEvents.php');
include_once('ListEventsResponse.php');
include_once('Event.php');
include_once('FireEvent.php');
include_once('FireEventResponse.php');
include_once('ListJobs.php');
include_once('ListJobsResponse.php');
include_once('Job.php');
include_once('ListJobTypes.php');
include_once('ListJobTypesResponse.php');
include_once('ListJobActions.php');
include_once('ListJobActionsResponse.php');
include_once('ListJobStates.php');
include_once('ListJobStatesResponse.php');
include_once('CancelJob.php');
include_once('CancelJobResponse.php');
include_once('CreateCacheRefreshPlan.php');
include_once('CreateCacheRefreshPlanResponse.php');
include_once('SetCacheRefreshPlanProperties.php');
include_once('SetCacheRefreshPlanPropertiesResponse.php');
include_once('GetCacheRefreshPlanProperties.php');
include_once('GetCacheRefreshPlanPropertiesResponse.php');
include_once('CacheRefreshPlanState.php');
include_once('DeleteCacheRefreshPlan.php');
include_once('DeleteCacheRefreshPlanResponse.php');
include_once('ListCacheRefreshPlans.php');
include_once('ListCacheRefreshPlansResponse.php');
include_once('CacheRefreshPlan.php');
include_once('LogonUser.php');
include_once('LogonUserResponse.php');
include_once('Logoff.php');
include_once('LogoffResponse.php');
include_once('GetPermissions.php');
include_once('GetPermissionsResponse.php');
include_once('GetSystemPermissions.php');
include_once('GetSystemPermissionsResponse.php');
include_once('ListSecurityScopes.php');
include_once('ListSecurityScopesResponse.php');


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
    'CreateCatalogItem' => '\PhpSsrs\ReportService2010\CreateCatalogItem',
    'Property' => '\PhpSsrs\ReportService2010\Property',
    'CreateCatalogItemResponse' => '\PhpSsrs\ReportService2010\CreateCatalogItemResponse',
    'CatalogItem' => '\PhpSsrs\ReportService2010\CatalogItem',
    'Warning' => '\PhpSsrs\ReportService2010\Warning',
    'TrustedUserHeader' => '\PhpSsrs\ReportService2010\TrustedUserHeader',
    'ServerInfoHeader' => '\PhpSsrs\ReportService2010\ServerInfoHeader',
    'TimeZoneInformation' => '\PhpSsrs\ReportService2010\TimeZoneInformation',
    'SYSTEMTIME' => '\PhpSsrs\ReportService2010\SYSTEMTIME',
    'SetItemDefinition' => '\PhpSsrs\ReportService2010\SetItemDefinition',
    'SetItemDefinitionResponse' => '\PhpSsrs\ReportService2010\SetItemDefinitionResponse',
    'GetItemDefinition' => '\PhpSsrs\ReportService2010\GetItemDefinition',
    'GetItemDefinitionResponse' => '\PhpSsrs\ReportService2010\GetItemDefinitionResponse',
    'GetItemType' => '\PhpSsrs\ReportService2010\GetItemType',
    'GetItemTypeResponse' => '\PhpSsrs\ReportService2010\GetItemTypeResponse',
    'DeleteItem' => '\PhpSsrs\ReportService2010\DeleteItem',
    'DeleteItemResponse' => '\PhpSsrs\ReportService2010\DeleteItemResponse',
    'MoveItem' => '\PhpSsrs\ReportService2010\MoveItem',
    'MoveItemResponse' => '\PhpSsrs\ReportService2010\MoveItemResponse',
    'InheritParentSecurity' => '\PhpSsrs\ReportService2010\InheritParentSecurity',
    'InheritParentSecurityResponse' => '\PhpSsrs\ReportService2010\InheritParentSecurityResponse',
    'ListItemHistory' => '\PhpSsrs\ReportService2010\ListItemHistory',
    'ListItemHistoryResponse' => '\PhpSsrs\ReportService2010\ListItemHistoryResponse',
    'ItemHistorySnapshot' => '\PhpSsrs\ReportService2010\ItemHistorySnapshot',
    'ListChildren' => '\PhpSsrs\ReportService2010\ListChildren',
    'ListChildrenResponse' => '\PhpSsrs\ReportService2010\ListChildrenResponse',
    'ListDependentItems' => '\PhpSsrs\ReportService2010\ListDependentItems',
    'ListDependentItemsResponse' => '\PhpSsrs\ReportService2010\ListDependentItemsResponse',
    'FindItems' => '\PhpSsrs\ReportService2010\FindItems',
    'SearchCondition' => '\PhpSsrs\ReportService2010\SearchCondition',
    'FindItemsResponse' => '\PhpSsrs\ReportService2010\FindItemsResponse',
    'ListParents' => '\PhpSsrs\ReportService2010\ListParents',
    'ListParentsResponse' => '\PhpSsrs\ReportService2010\ListParentsResponse',
    'CreateFolder' => '\PhpSsrs\ReportService2010\CreateFolder',
    'CreateFolderResponse' => '\PhpSsrs\ReportService2010\CreateFolderResponse',
    'SetProperties' => '\PhpSsrs\ReportService2010\SetProperties',
    'SetPropertiesResponse' => '\PhpSsrs\ReportService2010\SetPropertiesResponse',
    'GetProperties' => '\PhpSsrs\ReportService2010\GetProperties',
    'GetPropertiesResponse' => '\PhpSsrs\ReportService2010\GetPropertiesResponse',
    'ItemNamespaceHeader' => '\PhpSsrs\ReportService2010\ItemNamespaceHeader',
    'SetItemReferences' => '\PhpSsrs\ReportService2010\SetItemReferences',
    'ItemReference' => '\PhpSsrs\ReportService2010\ItemReference',
    'SetItemReferencesResponse' => '\PhpSsrs\ReportService2010\SetItemReferencesResponse',
    'GetItemReferences' => '\PhpSsrs\ReportService2010\GetItemReferences',
    'GetItemReferencesResponse' => '\PhpSsrs\ReportService2010\GetItemReferencesResponse',
    'ItemReferenceData' => '\PhpSsrs\ReportService2010\ItemReferenceData',
    'ListItemTypes' => '\PhpSsrs\ReportService2010\ListItemTypes',
    'ListItemTypesResponse' => '\PhpSsrs\ReportService2010\ListItemTypesResponse',
    'SetSubscriptionProperties' => '\PhpSsrs\ReportService2010\SetSubscriptionProperties',
    'ExtensionSettings' => '\PhpSsrs\ReportService2010\ExtensionSettings',
    'ParameterValue' => '\PhpSsrs\ReportService2010\ParameterValue',
    'ParameterValueOrFieldReference' => '\PhpSsrs\ReportService2010\ParameterValueOrFieldReference',
    'ParameterFieldReference' => '\PhpSsrs\ReportService2010\ParameterFieldReference',
    'SetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportService2010\SetSubscriptionPropertiesResponse',
    'GetSubscriptionProperties' => '\PhpSsrs\ReportService2010\GetSubscriptionProperties',
    'GetSubscriptionPropertiesResponse' => '\PhpSsrs\ReportService2010\GetSubscriptionPropertiesResponse',
    'ActiveState' => '\PhpSsrs\ReportService2010\ActiveState',
    'SetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportService2010\SetDataDrivenSubscriptionProperties',
    'DataRetrievalPlan' => '\PhpSsrs\ReportService2010\DataRetrievalPlan',
    'DataSourceDefinition' => '\PhpSsrs\ReportService2010\DataSourceDefinition',
    'DataSourceDefinitionOrReference' => '\PhpSsrs\ReportService2010\DataSourceDefinitionOrReference',
    'InvalidDataSourceReference' => '\PhpSsrs\ReportService2010\InvalidDataSourceReference',
    'DataSourceReference' => '\PhpSsrs\ReportService2010\DataSourceReference',
    'DataSetDefinition' => '\PhpSsrs\ReportService2010\DataSetDefinition',
    'Field' => '\PhpSsrs\ReportService2010\Field',
    'QueryDefinition' => '\PhpSsrs\ReportService2010\QueryDefinition',
    'SetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportService2010\SetDataDrivenSubscriptionPropertiesResponse',
    'GetDataDrivenSubscriptionProperties' => '\PhpSsrs\ReportService2010\GetDataDrivenSubscriptionProperties',
    'GetDataDrivenSubscriptionPropertiesResponse' => '\PhpSsrs\ReportService2010\GetDataDrivenSubscriptionPropertiesResponse',
    'DeleteSubscription' => '\PhpSsrs\ReportService2010\DeleteSubscription',
    'DeleteSubscriptionResponse' => '\PhpSsrs\ReportService2010\DeleteSubscriptionResponse',
    'CreateSubscription' => '\PhpSsrs\ReportService2010\CreateSubscription',
    'CreateSubscriptionResponse' => '\PhpSsrs\ReportService2010\CreateSubscriptionResponse',
    'CreateDataDrivenSubscription' => '\PhpSsrs\ReportService2010\CreateDataDrivenSubscription',
    'CreateDataDrivenSubscriptionResponse' => '\PhpSsrs\ReportService2010\CreateDataDrivenSubscriptionResponse',
    'GetExtensionSettings' => '\PhpSsrs\ReportService2010\GetExtensionSettings',
    'GetExtensionSettingsResponse' => '\PhpSsrs\ReportService2010\GetExtensionSettingsResponse',
    'ExtensionParameter' => '\PhpSsrs\ReportService2010\ExtensionParameter',
    'ValidValue' => '\PhpSsrs\ReportService2010\ValidValue',
    'ValidateExtensionSettings' => '\PhpSsrs\ReportService2010\ValidateExtensionSettings',
    'ValidateExtensionSettingsResponse' => '\PhpSsrs\ReportService2010\ValidateExtensionSettingsResponse',
    'ListSubscriptions' => '\PhpSsrs\ReportService2010\ListSubscriptions',
    'ListSubscriptionsResponse' => '\PhpSsrs\ReportService2010\ListSubscriptionsResponse',
    'Subscription' => '\PhpSsrs\ReportService2010\Subscription',
    'ListMySubscriptions' => '\PhpSsrs\ReportService2010\ListMySubscriptions',
    'ListMySubscriptionsResponse' => '\PhpSsrs\ReportService2010\ListMySubscriptionsResponse',
    'ListSubscriptionsUsingDataSource' => '\PhpSsrs\ReportService2010\ListSubscriptionsUsingDataSource',
    'ListSubscriptionsUsingDataSourceResponse' => '\PhpSsrs\ReportService2010\ListSubscriptionsUsingDataSourceResponse',
    'ChangeSubscriptionOwner' => '\PhpSsrs\ReportService2010\ChangeSubscriptionOwner',
    'ChangeSubscriptionOwnerResponse' => '\PhpSsrs\ReportService2010\ChangeSubscriptionOwnerResponse',
    'CreateDataSource' => '\PhpSsrs\ReportService2010\CreateDataSource',
    'CreateDataSourceResponse' => '\PhpSsrs\ReportService2010\CreateDataSourceResponse',
    'PrepareQuery' => '\PhpSsrs\ReportService2010\PrepareQuery',
    'DataSource' => '\PhpSsrs\ReportService2010\DataSource',
    'PrepareQueryResponse' => '\PhpSsrs\ReportService2010\PrepareQueryResponse',
    'EnableDataSource' => '\PhpSsrs\ReportService2010\EnableDataSource',
    'EnableDataSourceResponse' => '\PhpSsrs\ReportService2010\EnableDataSourceResponse',
    'DisableDataSource' => '\PhpSsrs\ReportService2010\DisableDataSource',
    'DisableDataSourceResponse' => '\PhpSsrs\ReportService2010\DisableDataSourceResponse',
    'SetDataSourceContents' => '\PhpSsrs\ReportService2010\SetDataSourceContents',
    'SetDataSourceContentsResponse' => '\PhpSsrs\ReportService2010\SetDataSourceContentsResponse',
    'GetDataSourceContents' => '\PhpSsrs\ReportService2010\GetDataSourceContents',
    'GetDataSourceContentsResponse' => '\PhpSsrs\ReportService2010\GetDataSourceContentsResponse',
    'ListDatabaseCredentialRetrievalOptions' => '\PhpSsrs\ReportService2010\ListDatabaseCredentialRetrievalOptions',
    'ListDatabaseCredentialRetrievalOptionsResponse' => '\PhpSsrs\ReportService2010\ListDatabaseCredentialRetrievalOptionsResponse',
    'SetItemDataSources' => '\PhpSsrs\ReportService2010\SetItemDataSources',
    'SetItemDataSourcesResponse' => '\PhpSsrs\ReportService2010\SetItemDataSourcesResponse',
    'GetItemDataSources' => '\PhpSsrs\ReportService2010\GetItemDataSources',
    'GetItemDataSourcesResponse' => '\PhpSsrs\ReportService2010\GetItemDataSourcesResponse',
    'TestConnectForDataSourceDefinition' => '\PhpSsrs\ReportService2010\TestConnectForDataSourceDefinition',
    'TestConnectForDataSourceDefinitionResponse' => '\PhpSsrs\ReportService2010\TestConnectForDataSourceDefinitionResponse',
    'TestConnectForItemDataSource' => '\PhpSsrs\ReportService2010\TestConnectForItemDataSource',
    'TestConnectForItemDataSourceResponse' => '\PhpSsrs\ReportService2010\TestConnectForItemDataSourceResponse',
    'CreateRole' => '\PhpSsrs\ReportService2010\CreateRole',
    'CreateRoleResponse' => '\PhpSsrs\ReportService2010\CreateRoleResponse',
    'SetRoleProperties' => '\PhpSsrs\ReportService2010\SetRoleProperties',
    'SetRolePropertiesResponse' => '\PhpSsrs\ReportService2010\SetRolePropertiesResponse',
    'GetRoleProperties' => '\PhpSsrs\ReportService2010\GetRoleProperties',
    'GetRolePropertiesResponse' => '\PhpSsrs\ReportService2010\GetRolePropertiesResponse',
    'DeleteRole' => '\PhpSsrs\ReportService2010\DeleteRole',
    'DeleteRoleResponse' => '\PhpSsrs\ReportService2010\DeleteRoleResponse',
    'ListRoles' => '\PhpSsrs\ReportService2010\ListRoles',
    'ListRolesResponse' => '\PhpSsrs\ReportService2010\ListRolesResponse',
    'Role' => '\PhpSsrs\ReportService2010\Role',
    'ListTasks' => '\PhpSsrs\ReportService2010\ListTasks',
    'ListTasksResponse' => '\PhpSsrs\ReportService2010\ListTasksResponse',
    'Task' => '\PhpSsrs\ReportService2010\Task',
    'SetPolicies' => '\PhpSsrs\ReportService2010\SetPolicies',
    'Policy' => '\PhpSsrs\ReportService2010\Policy',
    'SetPoliciesResponse' => '\PhpSsrs\ReportService2010\SetPoliciesResponse',
    'GetPolicies' => '\PhpSsrs\ReportService2010\GetPolicies',
    'GetPoliciesResponse' => '\PhpSsrs\ReportService2010\GetPoliciesResponse',
    'GetItemDataSourcePrompts' => '\PhpSsrs\ReportService2010\GetItemDataSourcePrompts',
    'GetItemDataSourcePromptsResponse' => '\PhpSsrs\ReportService2010\GetItemDataSourcePromptsResponse',
    'DataSourcePrompt' => '\PhpSsrs\ReportService2010\DataSourcePrompt',
    'GenerateModel' => '\PhpSsrs\ReportService2010\GenerateModel',
    'GenerateModelResponse' => '\PhpSsrs\ReportService2010\GenerateModelResponse',
    'GetModelItemPermissions' => '\PhpSsrs\ReportService2010\GetModelItemPermissions',
    'GetModelItemPermissionsResponse' => '\PhpSsrs\ReportService2010\GetModelItemPermissionsResponse',
    'SetModelItemPolicies' => '\PhpSsrs\ReportService2010\SetModelItemPolicies',
    'SetModelItemPoliciesResponse' => '\PhpSsrs\ReportService2010\SetModelItemPoliciesResponse',
    'GetModelItemPolicies' => '\PhpSsrs\ReportService2010\GetModelItemPolicies',
    'GetModelItemPoliciesResponse' => '\PhpSsrs\ReportService2010\GetModelItemPoliciesResponse',
    'GetUserModel' => '\PhpSsrs\ReportService2010\GetUserModel',
    'GetUserModelResponse' => '\PhpSsrs\ReportService2010\GetUserModelResponse',
    'InheritModelItemParentSecurity' => '\PhpSsrs\ReportService2010\InheritModelItemParentSecurity',
    'InheritModelItemParentSecurityResponse' => '\PhpSsrs\ReportService2010\InheritModelItemParentSecurityResponse',
    'SetModelDrillthroughReports' => '\PhpSsrs\ReportService2010\SetModelDrillthroughReports',
    'ModelDrillthroughReport' => '\PhpSsrs\ReportService2010\ModelDrillthroughReport',
    'SetModelDrillthroughReportsResponse' => '\PhpSsrs\ReportService2010\SetModelDrillthroughReportsResponse',
    'ListModelDrillthroughReports' => '\PhpSsrs\ReportService2010\ListModelDrillthroughReports',
    'ListModelDrillthroughReportsResponse' => '\PhpSsrs\ReportService2010\ListModelDrillthroughReportsResponse',
    'ListModelItemChildren' => '\PhpSsrs\ReportService2010\ListModelItemChildren',
    'ListModelItemChildrenResponse' => '\PhpSsrs\ReportService2010\ListModelItemChildrenResponse',
    'ModelItem' => '\PhpSsrs\ReportService2010\ModelItem',
    'ListModelItemTypes' => '\PhpSsrs\ReportService2010\ListModelItemTypes',
    'ListModelItemTypesResponse' => '\PhpSsrs\ReportService2010\ListModelItemTypesResponse',
    'ListModelPerspectives' => '\PhpSsrs\ReportService2010\ListModelPerspectives',
    'ListModelPerspectivesResponse' => '\PhpSsrs\ReportService2010\ListModelPerspectivesResponse',
    'ModelCatalogItem' => '\PhpSsrs\ReportService2010\ModelCatalogItem',
    'ModelPerspective' => '\PhpSsrs\ReportService2010\ModelPerspective',
    'RegenerateModel' => '\PhpSsrs\ReportService2010\RegenerateModel',
    'RegenerateModelResponse' => '\PhpSsrs\ReportService2010\RegenerateModelResponse',
    'RemoveAllModelItemPolicies' => '\PhpSsrs\ReportService2010\RemoveAllModelItemPolicies',
    'RemoveAllModelItemPoliciesResponse' => '\PhpSsrs\ReportService2010\RemoveAllModelItemPoliciesResponse',
    'CreateSchedule' => '\PhpSsrs\ReportService2010\CreateSchedule',
    'ScheduleDefinition' => '\PhpSsrs\ReportService2010\ScheduleDefinition',
    'ScheduleDefinitionOrReference' => '\PhpSsrs\ReportService2010\ScheduleDefinitionOrReference',
    'MonthlyRecurrence' => '\PhpSsrs\ReportService2010\MonthlyRecurrence',
    'RecurrencePattern' => '\PhpSsrs\ReportService2010\RecurrencePattern',
    'MonthlyDOWRecurrence' => '\PhpSsrs\ReportService2010\MonthlyDOWRecurrence',
    'DaysOfWeekSelector' => '\PhpSsrs\ReportService2010\DaysOfWeekSelector',
    'MonthsOfYearSelector' => '\PhpSsrs\ReportService2010\MonthsOfYearSelector',
    'WeeklyRecurrence' => '\PhpSsrs\ReportService2010\WeeklyRecurrence',
    'DailyRecurrence' => '\PhpSsrs\ReportService2010\DailyRecurrence',
    'MinuteRecurrence' => '\PhpSsrs\ReportService2010\MinuteRecurrence',
    'CreateScheduleResponse' => '\PhpSsrs\ReportService2010\CreateScheduleResponse',
    'DeleteSchedule' => '\PhpSsrs\ReportService2010\DeleteSchedule',
    'DeleteScheduleResponse' => '\PhpSsrs\ReportService2010\DeleteScheduleResponse',
    'ListSchedules' => '\PhpSsrs\ReportService2010\ListSchedules',
    'ListSchedulesResponse' => '\PhpSsrs\ReportService2010\ListSchedulesResponse',
    'Schedule' => '\PhpSsrs\ReportService2010\Schedule',
    'GetScheduleProperties' => '\PhpSsrs\ReportService2010\GetScheduleProperties',
    'GetSchedulePropertiesResponse' => '\PhpSsrs\ReportService2010\GetSchedulePropertiesResponse',
    'ListScheduleStates' => '\PhpSsrs\ReportService2010\ListScheduleStates',
    'ListScheduleStatesResponse' => '\PhpSsrs\ReportService2010\ListScheduleStatesResponse',
    'PauseSchedule' => '\PhpSsrs\ReportService2010\PauseSchedule',
    'PauseScheduleResponse' => '\PhpSsrs\ReportService2010\PauseScheduleResponse',
    'ResumeSchedule' => '\PhpSsrs\ReportService2010\ResumeSchedule',
    'ResumeScheduleResponse' => '\PhpSsrs\ReportService2010\ResumeScheduleResponse',
    'SetScheduleProperties' => '\PhpSsrs\ReportService2010\SetScheduleProperties',
    'SetSchedulePropertiesResponse' => '\PhpSsrs\ReportService2010\SetSchedulePropertiesResponse',
    'ListScheduledItems' => '\PhpSsrs\ReportService2010\ListScheduledItems',
    'ListScheduledItemsResponse' => '\PhpSsrs\ReportService2010\ListScheduledItemsResponse',
    'SetItemParameters' => '\PhpSsrs\ReportService2010\SetItemParameters',
    'ItemParameter' => '\PhpSsrs\ReportService2010\ItemParameter',
    'SetItemParametersResponse' => '\PhpSsrs\ReportService2010\SetItemParametersResponse',
    'GetItemParameters' => '\PhpSsrs\ReportService2010\GetItemParameters',
    'DataSourceCredentials' => '\PhpSsrs\ReportService2010\DataSourceCredentials',
    'GetItemParametersResponse' => '\PhpSsrs\ReportService2010\GetItemParametersResponse',
    'ListParameterTypes' => '\PhpSsrs\ReportService2010\ListParameterTypes',
    'ListParameterTypesResponse' => '\PhpSsrs\ReportService2010\ListParameterTypesResponse',
    'ListParameterStates' => '\PhpSsrs\ReportService2010\ListParameterStates',
    'ListParameterStatesResponse' => '\PhpSsrs\ReportService2010\ListParameterStatesResponse',
    'CreateReportEditSession' => '\PhpSsrs\ReportService2010\CreateReportEditSession',
    'CreateReportEditSessionResponse' => '\PhpSsrs\ReportService2010\CreateReportEditSessionResponse',
    'CreateLinkedItem' => '\PhpSsrs\ReportService2010\CreateLinkedItem',
    'CreateLinkedItemResponse' => '\PhpSsrs\ReportService2010\CreateLinkedItemResponse',
    'SetItemLink' => '\PhpSsrs\ReportService2010\SetItemLink',
    'SetItemLinkResponse' => '\PhpSsrs\ReportService2010\SetItemLinkResponse',
    'GetItemLink' => '\PhpSsrs\ReportService2010\GetItemLink',
    'GetItemLinkResponse' => '\PhpSsrs\ReportService2010\GetItemLinkResponse',
    'ListExecutionSettings' => '\PhpSsrs\ReportService2010\ListExecutionSettings',
    'ListExecutionSettingsResponse' => '\PhpSsrs\ReportService2010\ListExecutionSettingsResponse',
    'SetExecutionOptions' => '\PhpSsrs\ReportService2010\SetExecutionOptions',
    'NoSchedule' => '\PhpSsrs\ReportService2010\NoSchedule',
    'ScheduleReference' => '\PhpSsrs\ReportService2010\ScheduleReference',
    'SetExecutionOptionsResponse' => '\PhpSsrs\ReportService2010\SetExecutionOptionsResponse',
    'GetExecutionOptions' => '\PhpSsrs\ReportService2010\GetExecutionOptions',
    'GetExecutionOptionsResponse' => '\PhpSsrs\ReportService2010\GetExecutionOptionsResponse',
    'UpdateItemExecutionSnapshot' => '\PhpSsrs\ReportService2010\UpdateItemExecutionSnapshot',
    'UpdateItemExecutionSnapshotResponse' => '\PhpSsrs\ReportService2010\UpdateItemExecutionSnapshotResponse',
    'SetCacheOptions' => '\PhpSsrs\ReportService2010\SetCacheOptions',
    'TimeExpiration' => '\PhpSsrs\ReportService2010\TimeExpiration',
    'ExpirationDefinition' => '\PhpSsrs\ReportService2010\ExpirationDefinition',
    'ScheduleExpiration' => '\PhpSsrs\ReportService2010\ScheduleExpiration',
    'SetCacheOptionsResponse' => '\PhpSsrs\ReportService2010\SetCacheOptionsResponse',
    'GetCacheOptions' => '\PhpSsrs\ReportService2010\GetCacheOptions',
    'GetCacheOptionsResponse' => '\PhpSsrs\ReportService2010\GetCacheOptionsResponse',
    'FlushCache' => '\PhpSsrs\ReportService2010\FlushCache',
    'FlushCacheResponse' => '\PhpSsrs\ReportService2010\FlushCacheResponse',
    'CreateItemHistorySnapshot' => '\PhpSsrs\ReportService2010\CreateItemHistorySnapshot',
    'CreateItemHistorySnapshotResponse' => '\PhpSsrs\ReportService2010\CreateItemHistorySnapshotResponse',
    'DeleteItemHistorySnapshot' => '\PhpSsrs\ReportService2010\DeleteItemHistorySnapshot',
    'DeleteItemHistorySnapshotResponse' => '\PhpSsrs\ReportService2010\DeleteItemHistorySnapshotResponse',
    'SetItemHistoryLimit' => '\PhpSsrs\ReportService2010\SetItemHistoryLimit',
    'SetItemHistoryLimitResponse' => '\PhpSsrs\ReportService2010\SetItemHistoryLimitResponse',
    'GetItemHistoryLimit' => '\PhpSsrs\ReportService2010\GetItemHistoryLimit',
    'GetItemHistoryLimitResponse' => '\PhpSsrs\ReportService2010\GetItemHistoryLimitResponse',
    'SetItemHistoryOptions' => '\PhpSsrs\ReportService2010\SetItemHistoryOptions',
    'SetItemHistoryOptionsResponse' => '\PhpSsrs\ReportService2010\SetItemHistoryOptionsResponse',
    'GetItemHistoryOptions' => '\PhpSsrs\ReportService2010\GetItemHistoryOptions',
    'GetItemHistoryOptionsResponse' => '\PhpSsrs\ReportService2010\GetItemHistoryOptionsResponse',
    'GetReportServerConfigInfo' => '\PhpSsrs\ReportService2010\GetReportServerConfigInfo',
    'GetReportServerConfigInfoResponse' => '\PhpSsrs\ReportService2010\GetReportServerConfigInfoResponse',
    'IsSSLRequired' => '\PhpSsrs\ReportService2010\IsSSLRequired',
    'IsSSLRequiredResponse' => '\PhpSsrs\ReportService2010\IsSSLRequiredResponse',
    'SetSystemProperties' => '\PhpSsrs\ReportService2010\SetSystemProperties',
    'SetSystemPropertiesResponse' => '\PhpSsrs\ReportService2010\SetSystemPropertiesResponse',
    'GetSystemProperties' => '\PhpSsrs\ReportService2010\GetSystemProperties',
    'GetSystemPropertiesResponse' => '\PhpSsrs\ReportService2010\GetSystemPropertiesResponse',
    'SetSystemPolicies' => '\PhpSsrs\ReportService2010\SetSystemPolicies',
    'SetSystemPoliciesResponse' => '\PhpSsrs\ReportService2010\SetSystemPoliciesResponse',
    'GetSystemPolicies' => '\PhpSsrs\ReportService2010\GetSystemPolicies',
    'GetSystemPoliciesResponse' => '\PhpSsrs\ReportService2010\GetSystemPoliciesResponse',
    'ListExtensions' => '\PhpSsrs\ReportService2010\ListExtensions',
    'ListExtensionsResponse' => '\PhpSsrs\ReportService2010\ListExtensionsResponse',
    'Extension' => '\PhpSsrs\ReportService2010\Extension',
    'ListExtensionTypes' => '\PhpSsrs\ReportService2010\ListExtensionTypes',
    'ListExtensionTypesResponse' => '\PhpSsrs\ReportService2010\ListExtensionTypesResponse',
    'ListEvents' => '\PhpSsrs\ReportService2010\ListEvents',
    'ListEventsResponse' => '\PhpSsrs\ReportService2010\ListEventsResponse',
    'Event' => '\PhpSsrs\ReportService2010\Event',
    'FireEvent' => '\PhpSsrs\ReportService2010\FireEvent',
    'FireEventResponse' => '\PhpSsrs\ReportService2010\FireEventResponse',
    'ListJobs' => '\PhpSsrs\ReportService2010\ListJobs',
    'ListJobsResponse' => '\PhpSsrs\ReportService2010\ListJobsResponse',
    'Job' => '\PhpSsrs\ReportService2010\Job',
    'ListJobTypes' => '\PhpSsrs\ReportService2010\ListJobTypes',
    'ListJobTypesResponse' => '\PhpSsrs\ReportService2010\ListJobTypesResponse',
    'ListJobActions' => '\PhpSsrs\ReportService2010\ListJobActions',
    'ListJobActionsResponse' => '\PhpSsrs\ReportService2010\ListJobActionsResponse',
    'ListJobStates' => '\PhpSsrs\ReportService2010\ListJobStates',
    'ListJobStatesResponse' => '\PhpSsrs\ReportService2010\ListJobStatesResponse',
    'CancelJob' => '\PhpSsrs\ReportService2010\CancelJob',
    'CancelJobResponse' => '\PhpSsrs\ReportService2010\CancelJobResponse',
    'CreateCacheRefreshPlan' => '\PhpSsrs\ReportService2010\CreateCacheRefreshPlan',
    'CreateCacheRefreshPlanResponse' => '\PhpSsrs\ReportService2010\CreateCacheRefreshPlanResponse',
    'SetCacheRefreshPlanProperties' => '\PhpSsrs\ReportService2010\SetCacheRefreshPlanProperties',
    'SetCacheRefreshPlanPropertiesResponse' => '\PhpSsrs\ReportService2010\SetCacheRefreshPlanPropertiesResponse',
    'GetCacheRefreshPlanProperties' => '\PhpSsrs\ReportService2010\GetCacheRefreshPlanProperties',
    'GetCacheRefreshPlanPropertiesResponse' => '\PhpSsrs\ReportService2010\GetCacheRefreshPlanPropertiesResponse',
    'CacheRefreshPlanState' => '\PhpSsrs\ReportService2010\CacheRefreshPlanState',
    'DeleteCacheRefreshPlan' => '\PhpSsrs\ReportService2010\DeleteCacheRefreshPlan',
    'DeleteCacheRefreshPlanResponse' => '\PhpSsrs\ReportService2010\DeleteCacheRefreshPlanResponse',
    'ListCacheRefreshPlans' => '\PhpSsrs\ReportService2010\ListCacheRefreshPlans',
    'ListCacheRefreshPlansResponse' => '\PhpSsrs\ReportService2010\ListCacheRefreshPlansResponse',
    'CacheRefreshPlan' => '\PhpSsrs\ReportService2010\CacheRefreshPlan',
    'LogonUser' => '\PhpSsrs\ReportService2010\LogonUser',
    'LogonUserResponse' => '\PhpSsrs\ReportService2010\LogonUserResponse',
    'Logoff' => '\PhpSsrs\ReportService2010\Logoff',
    'LogoffResponse' => '\PhpSsrs\ReportService2010\LogoffResponse',
    'GetPermissions' => '\PhpSsrs\ReportService2010\GetPermissions',
    'GetPermissionsResponse' => '\PhpSsrs\ReportService2010\GetPermissionsResponse',
    'GetSystemPermissions' => '\PhpSsrs\ReportService2010\GetSystemPermissions',
    'GetSystemPermissionsResponse' => '\PhpSsrs\ReportService2010\GetSystemPermissionsResponse',
    'ListSecurityScopes' => '\PhpSsrs\ReportService2010\ListSecurityScopes',
    'ListSecurityScopesResponse' => '\PhpSsrs\ReportService2010\ListSecurityScopesResponse');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct(array $options = array(), $wsdl = 'ReportService2010.wsdl')
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
