# PackageLineFiltersModel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**updated_at_since** | [**\DateTime**](\DateTime.md) | Show updated since | [optional] 
**updated_at_till** | [**\DateTime**](\DateTime.md) | Show updated till | [optional] 
**id** | **int[]** | Bumbal package line id&#39;s | [optional] 
**nr** | **string[]** | PackageLine numbers | [optional] 
**status_id** | **int[]** | StatusIds of PackageLine, 31: package_line_cancelled, 23: package_line_incomplete, 24: package_line_new, 42: package_line_awaiting, 25: package_line_accepted, 10: package_line_planned, 11: package_line_in_progress, 12: package_line_executed | [optional] 
**status_name** | **string[]** | PackageLine Status | [optional] 
**nr_of_packages** | **int** | Number of packages in package line | [optional] 
**package_type_name** | **string[]** | Type of the Packages | [optional] 
**package_type_id** | **int[]** | ID of the package type for the packages | [optional] 
**length** | **float** | length of a single package | [optional] 
**width** | **float** | width of a single package | [optional] 
**height** | **float** | height of a single package | [optional] 
**unit_volume** | **float** | volume of a single package | [optional] 
**net_weight_unit** | **float** | net weight of a single package | [optional] 
**net_weight_total** | **float** | net weight of a all packages | [optional] 
**tare_weight_unit** | **float** | tare weight of a single package | [optional] 
**tare_weight_total** | **float** | tare weight of a all packages | [optional] 
**gross_weight_unit** | **float** | gross weight of a single package | [optional] 
**gross_weight_total** | **float** | gross weight of a all packages | [optional] 
**unit_loading_meter** | **float** | loading meter of a single package | [optional] 
**barcode** | **string[]** | barcode for packages | [optional] 
**adr** | **bool** | boolean for whether or not the packages in package line should be considered as ADR | [optional] 
**adr_class** | **int[]** | ADR class of packages in package line | [optional] 
**adr_un_nr** | **int[]** | ADR UN Nr of packages in package line | [optional] 
**temp** | **bool** | boolean for whether or not the packages in package line should be considered as temperature dependent | [optional] 
**temp_min** | **float** | minimum temperature for packages in package line | [optional] 
**temp_max** | **float** | maximum temperature for packages in package line | [optional] 
**capacity_volume** | **float** | total volume for all packages in package line, used for any capacity related calculations | [optional] 
**capacity_loading_meter** | **float** | total loading meter for all packages in package line, used for any capacity related calculations | [optional] 
**capacity_loading_weight** | **float** | total weight for all packages in package line, used for any capacity related calculations | [optional] 
**hs_code** | **string[]** | Harmonized System code for packages | [optional] 
**description** | **string** | description of this package_line | [optional] 
**links** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**activity_links** | [**\BumbalClient\BumbalClient\Model\LinkModel[]**](LinkModel.md) |  | [optional] 
**activity_id** | **int[]** | Activity id | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


