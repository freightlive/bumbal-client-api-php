# PauseModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | [optional] 
**name** | **string** | Name of pause | [optional] 
**initial_driving_duration** | **int** | initial driving time in minutes until first possibility of starting pause | [optional] 
**max_driving_duration** | **int** | max driving time in minutes before a pause must be started | [optional] 
**pause_duration** | **int** | (total) duration for pause(s) in minutes | [optional] 
**possible_split** | **int[]** | A list of durations in minutes by witch the total duration of the pause may be split | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


