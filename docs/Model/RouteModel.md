# RouteModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of Route | 
**nr** | **string** | Non-Unique number of Route | [optional] 
**name** | **string** | Description | [optional] 
**status_name** | **string** | Route Status | [optional] 
**status_id** | **int** | Status ID of Route, 29:route_cancelled, 1:route_planned, 2:route_in_progress, 8:route_executed | [optional] 
**nr_of_stops** | **int** | number of stops on this route (excluding start_route and end_route activities) | [optional] 
**driver_id** | **int** |  | [optional] 
**driver_link** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**user_link** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**car_id** | **int** |  | [optional] 
**car_link** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**trailer_id** | **int** |  | [optional] 
**trailer_link** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**earliest_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**latest_date_time** | [**\DateTime**](\DateTime.md) |  | [optional] 
**planned_driving_duration** | **int** | Planned driving duration of this route in minutes | [optional] 
**planned_waiting_duration** | **int** | Planned waiting duration of this route in minutes | [optional] 
**planned_activity_duration** | **int** | Planned duration for all activities in this route in minutes | [optional] 
**planned_total_duration** | **int** | Total planned duration of this route in minutes | [optional] 
**gps_locations** | [**\BumbalClient\BumbalClient\Model\GPSLocationModel[]**](GPSLocationModel.md) |  | [optional] 
**latest_known_position** | [**\BumbalClient\BumbalClient\Model\GPSLocationModel**](GPSLocationModel.md) |  | [optional] 
**recurrence_id** | **int** | id of recurrence where route belongs to | [optional] 
**recurrence_nr** | **int** | nr within recurrence where route belongs to | [optional] 
**overdue** | **bool** | whether any activity on route is overdue | [optional] 
**blocked** | **bool** | a blocked route can not be auto-filled by customer calendars | [optional] 
**start_address** | [**\BumbalClient\BumbalClient\Model\AddressModel**](AddressModel.md) |  | [optional] 
**end_address** | [**\BumbalClient\BumbalClient\Model\AddressModel**](AddressModel.md) |  | [optional] 
**activity_ids** | **object** |  | [optional] 
**links** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**notes** | [**\BumbalClient\BumbalClient\Model\NoteModel[]**](NoteModel.md) |  | [optional] 
**files** | [**\BumbalClient\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


