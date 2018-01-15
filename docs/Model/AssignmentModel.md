# AssignmentModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of this Assignment | 
**party_id** | **int** | Party ID | [optional] 
**status_id** | **int** | Status ID of this Assignment | 
**nr** | **string** | Non-Unique number of this Assignment | [optional] 
**party_link** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**account_name** | **string** | Account Name associated with this Assignment | [optional] 
**reference** | **string** | Reference text of this Assignment | [optional] 
**description** | **string** | Description text of this Assignment | [optional] 
**remarks** | **string** | Remarks about this Assignment | [optional] 
**date_time_from** | [**\DateTime**](\DateTime.md) | Earliest start time of all Activities is this Assignment | [optional] 
**date_time_to** | [**\DateTime**](\DateTime.md) | Latest end time of all Activities is this Assignment | [optional] 
**links** | [**\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**notes** | [**\BumbalClient\Model\NoteModel[]**](NoteModel.md) |  | [optional] 
**files** | [**\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


