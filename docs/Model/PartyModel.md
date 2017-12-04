# PartyModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique Identifier | 
**party_type_name** | **string** | Type of this party | [optional] 
**party_type_id** | **int** | PartyTypeID of this party. 2 &#x3D; contractor, 3 &#x3D; booking | [optional] 
**address** | [**\BumbalClient\BumbalClient\Model\AddressModel**](AddressModel.md) |  | [optional] 
**address_id** | **int** | Address ID (unique) | [optional] 
**name_1** | **string** | Name 1 for party | [optional] 
**name_2** | **string** | Name 2 for party | [optional] 
**nr** | **string** | Number of this party | [optional] 
**contact_person** | **string** | Contact person for party | [optional] 
**url** | **string** | Url for party website | [optional] 
**tags** | [**\BumbalClient\BumbalClient\Model\TagModel[]**](TagModel.md) |  | [optional] 
**links** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**meta_data** | [**\BumbalClient\BumbalClient\Model\MetaDataModel[]**](MetaDataModel.md) |  | [optional] 
**notes** | [**\BumbalClient\BumbalClient\Model\NoteModel[]**](NoteModel.md) |  | [optional] 
**files** | [**\BumbalClient\BumbalClient\Model\FileModel[]**](FileModel.md) |  | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | created_at date time | [optional] 
**updated_at** | [**\DateTime**](\DateTime.md) | updated_at date time | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


