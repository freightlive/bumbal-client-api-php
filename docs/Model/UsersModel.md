# UsersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | 
**uuid** | **int** | unique per user | [optional] 
**role_id** | **int** | id of the user role, 1: Guest, 2: Driver, 3: Planner, 4: Manager, 5: Admin | [optional] 
**role_name** | **string** | Role name | [optional] 
**first_name** | **string** | First name | [optional] 
**name_prefix** | **string** | Name prefix | [optional] 
**last_name** | **string** | Last name | [optional] 
**full_name** | **string** | Full name | [optional] 
**email** | **string** | user email (used for login) | [optional] 
**password** | **string** | user password (set only, no read) | [optional] 
**lang_code** | **string** | lang code (nl &#x3D; default) | [optional] 
**address_id** | **int** | id of the user address | [optional] 
**address** | [**\BumbalClient\Model\AddressModel**](AddressModel.md) | user address (mostly interesting for drivers) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


