# ActivityModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | 
**nr** | **string** | Number of this Activity | [optional] 
**activity_type_name** | **string** | Type of this Activity | [optional] 
**activity_type_id** | **int** | TypeID of this Activity | 
**status** | **string** | Activity Status | 
**remarks** | **string** | Remarks about this activity | [optional] 
**locked** | **bool** | Activity locked on a Route | [optional] 
**top_priority** | **bool** | Activity has top priority | [optional] 
**send_invite** | **bool** | Send invite | [optional] 
**sequence_nr** | **int** | Sequence number on Route | [optional] 
**reference** | **string** | Reference of this activity | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) | Earliest date-time | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) | latest date-time | [optional] 
**duration** | **int** | Duration of this activity in minutes | [optional] 
**route_nr** | **string** | Route Number (not unique) | [optional] 
**route_name** | **string** | Route name | [optional] 
**route_date_time_from** | [**\DateTime**](\DateTime.md) | Start date-time of route | [optional] 
**route_date_time_to** | [**\DateTime**](\DateTime.md) | End date-time of route | [optional] 
**route_earliest_date_time** | [**\DateTime**](\DateTime.md) | Earliest date-time of route | [optional] 
**route_latest_date_time** | [**\DateTime**](\DateTime.md) | Latest date-time of route | [optional] 
**route_status_id** | **int** | Status ID of this Route | [optional] 
**route_nr_of_stops** | **int** | Number of stops on this route | [optional] 
**route_overdue** | **bool** | Route is overdue | [optional] 
**driver_id** | **int** | Driver ID connected to this route/activity | [optional] 
**driver_first_name** | **string** | Driver first name | [optional] 
**driver_last_name** | **string** | Driver last name | [optional] 
**driver_name_prefix** | **string** | Driver prefix | [optional] 
**driver_full_name** | **string** | Driver full name | [optional] 
**driver_email** | **string** | Driver email | [optional] 
**address** | [**\Bumbal\Client\Model\AddressModel**](AddressModel.md) |  | [optional] 
**tags** | [**\Bumbal\Client\Model\TagModel[]**](TagModel.md) |  | [optional] 
**package_lines** | [**\Bumbal\Client\Model\PackageLineModel[]**](PackageLineModel.md) |  | [optional] 
**time_slots** | [**\Bumbal\Client\Model\TimeSlotModel[]**](TimeSlotModel.md) |  | [optional] 
**links** | [**\Bumbal\Client\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**communication** | [**\Bumbal\Client\Model\CommunicationModel**](CommunicationModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


