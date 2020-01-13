# 
Bumbal API documentation

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 2.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/bumbal/bumbal-client-api-php.git"
    }
  ],
  "require": {
    "bumbal/bumbal-client-api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to//autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
BumbalClient\Configuration::getDefaultConfiguration()->setApiKey('ApiKey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// BumbalClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('ApiKey', 'Bearer');

$api_instance = new BumbalClient\Api\ActivityApi();
$activity_id = 789; // int | ID of the activity to delete

try {
    $result = $api_instance->deleteActivity($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->deleteActivity: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *http://localhost/api/v2*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivityApi* | [**deleteActivity**](docs/Api/ActivityApi.md#deleteactivity) | **DELETE** /activity/{activityId} | Delete an activity
*ActivityApi* | [**retrieveActivity**](docs/Api/ActivityApi.md#retrieveactivity) | **GET** /activity/{activityId} | Find activity by ID
*ActivityApi* | [**retrieveListActivity**](docs/Api/ActivityApi.md#retrievelistactivity) | **PUT** /activity | Retrieve List of Activities
*ActivityApi* | [**setActivity**](docs/Api/ActivityApi.md#setactivity) | **POST** /activity/set | Set (create or update) an Activity
*ActivityApi* | [**updateActivity**](docs/Api/ActivityApi.md#updateactivity) | **PUT** /activity/{activityId} | Update a activity
*ActivitytypeApi* | [**retrieveActivityType**](docs/Api/ActivitytypeApi.md#retrieveactivitytype) | **GET** /activity-type/{activityTypeId} | Find ActivityType by ID
*ActivitytypeApi* | [**retrieveListActivityType**](docs/Api/ActivitytypeApi.md#retrievelistactivitytype) | **PUT** /activity-type | Retrieve List of ActivityTypes
*AddressApi* | [**retrieveAddress**](docs/Api/AddressApi.md#retrieveaddress) | **GET** /address/{addressId} | Retrieve a Address
*AddressApi* | [**retrieveListAddress**](docs/Api/AddressApi.md#retrievelistaddress) | **PUT** /address | Retrieve List of Addresses
*AddressApi* | [**reverseGeoCodeAddress**](docs/Api/AddressApi.md#reversegeocodeaddress) | **POST** /address/reverse-geo-code | Reverse Geo Code a address
*AddressApi* | [**setAddress**](docs/Api/AddressApi.md#setaddress) | **POST** /address/set | Add a new Address
*AddressappliedApi* | [**retrieveAddressApplied**](docs/Api/AddressappliedApi.md#retrieveaddressapplied) | **GET** /address-applied/{addressId} | Retrieve an Applied Address
*AddressappliedApi* | [**updateAddressApplied**](docs/Api/AddressappliedApi.md#updateaddressapplied) | **PUT** /address-applied/{addressId} | Update a AddressApplied
*AssignmentApi* | [**deleteAssignment**](docs/Api/AssignmentApi.md#deleteassignment) | **DELETE** /assignment/{assignmentId} | Delete an assignment
*AssignmentApi* | [**retrieveAssignment**](docs/Api/AssignmentApi.md#retrieveassignment) | **GET** /assignment/{assignmentId} | Find assignment by ID
*AssignmentApi* | [**retrieveListAssignment**](docs/Api/AssignmentApi.md#retrievelistassignment) | **PUT** /assignment | Retrieve List of Assignments
*AssignmentApi* | [**setAssignment**](docs/Api/AssignmentApi.md#setassignment) | **POST** /assignment/set | Set (create or update) an Assignment
*AssignmentApi* | [**updateAssignment**](docs/Api/AssignmentApi.md#updateassignment) | **PUT** /assignment/{assignmentId} | Update a assignment
*AuthenticateApi* | [**authenticateCheckToken**](docs/Api/AuthenticateApi.md#authenticatechecktoken) | **GET** /authenticate/check-token | Check a token for validity
*AuthenticateApi* | [**authenticateSignIn**](docs/Api/AuthenticateApi.md#authenticatesignin) | **POST** /authenticate/sign-in | Sign In with your user credentials
*AuthenticateApi* | [**authenticateSignOut**](docs/Api/AuthenticateApi.md#authenticatesignout) | **GET** /authenticate/sign-out | Sign out
*BrandApi* | [**createBrand**](docs/Api/BrandApi.md#createbrand) | **POST** /brand | Add a new Brand
*BrandApi* | [**deleteBrand**](docs/Api/BrandApi.md#deletebrand) | **DELETE** /brand/{brandId} | Delete a Brand
*BrandApi* | [**retrieveBrand**](docs/Api/BrandApi.md#retrievebrand) | **GET** /brand/{brandId} | Retrieve a Brand
*BrandApi* | [**retrieveListBrand**](docs/Api/BrandApi.md#retrievelistbrand) | **PUT** /brand | Retrieve List of Brands
*BrandApi* | [**setBrand**](docs/Api/BrandApi.md#setbrand) | **POST** /brand/set | Set (create or update) a Brand
*BrandApi* | [**updateBrand**](docs/Api/BrandApi.md#updatebrand) | **PUT** /brand/{brandId} | Update a Brand
*CapacitytypeApi* | [**deleteCapacityType**](docs/Api/CapacitytypeApi.md#deletecapacitytype) | **DELETE** /capacity-type/{capacityTypeId} | Delete a capacity-type
*CapacitytypeApi* | [**retrieveCapacityType**](docs/Api/CapacitytypeApi.md#retrievecapacitytype) | **GET** /capacity-type/{capacityTypeId} | Find capacity-type by ID
*CapacitytypeApi* | [**retrieveListCapacityType**](docs/Api/CapacitytypeApi.md#retrievelistcapacitytype) | **PUT** /capacity-type | Retrieve List of CapacityTypes
*CapacitytypeApi* | [**setCapacityType**](docs/Api/CapacitytypeApi.md#setcapacitytype) | **POST** /capacity-type/set | Set (create or update) an CapacityType
*CommunicationApi* | [**retrieveActivityCommunication**](docs/Api/CommunicationApi.md#retrieveactivitycommunication) | **POST** /communication/retrieve-activity | Retrieve Activity
*CommunicationApi* | [**triggerMessageCommunication**](docs/Api/CommunicationApi.md#triggermessagecommunication) | **POST** /communication/trigger-message | Trigger Message to Communication
*DriverApi* | [**createDriver**](docs/Api/DriverApi.md#createdriver) | **POST** /driver | Add a driver
*DriverApi* | [**deleteDriver**](docs/Api/DriverApi.md#deletedriver) | **DELETE** /driver/{driverId} | Delete an driver
*DriverApi* | [**retrieveDriver**](docs/Api/DriverApi.md#retrievedriver) | **GET** /driver/{driverId} | Find driver by ID
*DriverApi* | [**retrieveListDriver**](docs/Api/DriverApi.md#retrievelistdriver) | **PUT** /driver | Retrieve List of Drivers
*DriverApi* | [**setDriver**](docs/Api/DriverApi.md#setdriver) | **POST** /driver/set | Set (create or update) a driver
*DriverApi* | [**updateDriver**](docs/Api/DriverApi.md#updatedriver) | **PUT** /driver/{driverId} | Update a driver
*EquipmentApi* | [**deleteEquipment**](docs/Api/EquipmentApi.md#deleteequipment) | **DELETE** /equipment/{equipmentId} | Delete an Equipment
*EquipmentApi* | [**retrieveEquipment**](docs/Api/EquipmentApi.md#retrieveequipment) | **GET** /equipment/{equipmentId} | Retrieve a Equipment
*EquipmentApi* | [**retrieveListEquipment**](docs/Api/EquipmentApi.md#retrievelistequipment) | **PUT** /equipment | Retrieve List of Equipment
*EquipmentApi* | [**setEquipment**](docs/Api/EquipmentApi.md#setequipment) | **POST** /equipment/set | Add/Update Equipment
*FileApi* | [**deleteFile**](docs/Api/FileApi.md#deletefile) | **DELETE** /file/{fileId} | Delete an File
*FileApi* | [**fileCopy**](docs/Api/FileApi.md#filecopy) | **POST** /file/copy | Copy File
*FileApi* | [**retrieveFile**](docs/Api/FileApi.md#retrievefile) | **GET** /file/{fileId} | Retrieve a File
*FileApi* | [**retrieveListFile**](docs/Api/FileApi.md#retrievelistfile) | **PUT** /file | Retrieve List of Files
*FileApi* | [**setFile**](docs/Api/FileApi.md#setfile) | **POST** /file/set | Create or Update a File Object
*InstantmessagingApi* | [**instantMessagingList**](docs/Api/InstantmessagingApi.md#instantmessaginglist) | **POST** /instant-messaging/list | List conversations
*InstantmessagingApi* | [**instantMessagingPost**](docs/Api/InstantmessagingApi.md#instantmessagingpost) | **POST** /instant-messaging/post | Post a message to some one
*InstantmessagingApi* | [**instantMessagingRetrieveConversation**](docs/Api/InstantmessagingApi.md#instantmessagingretrieveconversation) | **POST** /instant-messaging/retrieve-conversation | Retrieve Conversation
*LinkApi* | [**updateLink**](docs/Api/LinkApi.md#updatelink) | **PUT** /link/{linkId} | Update a specific link object
*LogApi* | [**retrieveListLog**](docs/Api/LogApi.md#retrievelistlog) | **PUT** /log | Retrieve List of Log messages
*LogApi* | [**setLog**](docs/Api/LogApi.md#setlog) | **POST** /log/set | Post a Log message
*NoteApi* | [**deleteNote**](docs/Api/NoteApi.md#deletenote) | **DELETE** /note/{noteId} | Delete an note
*NoteApi* | [**retrieveListNote**](docs/Api/NoteApi.md#retrievelistnote) | **PUT** /note | Retrieve List of Notes
*NoteApi* | [**retrieveNote**](docs/Api/NoteApi.md#retrievenote) | **GET** /note/{noteId} | Find note by ID
*NoteApi* | [**setNote**](docs/Api/NoteApi.md#setnote) | **POST** /note/set | Set (create or update) a note
*PackagelineApi* | [**createPackageLine**](docs/Api/PackagelineApi.md#createpackageline) | **POST** /package-line | Create or update an Package Line
*PackagelineApi* | [**deletePackageLine**](docs/Api/PackagelineApi.md#deletepackageline) | **DELETE** /package-line/{packageLineId} | Delete an package-line
*PackagelineApi* | [**retrieveListPackageLine**](docs/Api/PackagelineApi.md#retrievelistpackageline) | **PUT** /package-line | Retrieve List of PackageLines
*PackagelineApi* | [**retrievePackageLine**](docs/Api/PackagelineApi.md#retrievepackageline) | **GET** /package-line/{packageLineId} | Find package-line by ID
*PackagelineApi* | [**setPackageLine**](docs/Api/PackagelineApi.md#setpackageline) | **POST** /package-line/set | Set (create or update) an PackageLine
*PackagelineApi* | [**updatePackageLine**](docs/Api/PackagelineApi.md#updatepackageline) | **PUT** /package-line/update | Update package-lines in bulk
*PackagetypeApi* | [**createPackageType**](docs/Api/PackagetypeApi.md#createpackagetype) | **POST** /package-type | Create or update an Package Line
*PackagetypeApi* | [**deletePackageType**](docs/Api/PackagetypeApi.md#deletepackagetype) | **DELETE** /package-type/{packageTypeId} | Delete an package-type
*PackagetypeApi* | [**retrieveListPackageType**](docs/Api/PackagetypeApi.md#retrievelistpackagetype) | **PUT** /package-type | Retrieve List of PackageTypes
*PackagetypeApi* | [**retrievePackageType**](docs/Api/PackagetypeApi.md#retrievepackagetype) | **GET** /package-type/{packageTypeId} | Find package-type by ID
*PackagetypeApi* | [**setPackageType**](docs/Api/PackagetypeApi.md#setpackagetype) | **POST** /package-type/set | Set (create or update) an PackageType
*PackagetypeApi* | [**updatePackageType**](docs/Api/PackagetypeApi.md#updatepackagetype) | **PUT** /package-type/{packageTypeId} | Update a package-type
*PartyApi* | [**createParty**](docs/Api/PartyApi.md#createparty) | **POST** /party | Create or update an Party
*PartyApi* | [**deleteParty**](docs/Api/PartyApi.md#deleteparty) | **DELETE** /party/{partyId} | Delete an party
*PartyApi* | [**retrieveListParty**](docs/Api/PartyApi.md#retrievelistparty) | **PUT** /party | Retrieve List of Parties
*PartyApi* | [**retrieveParty**](docs/Api/PartyApi.md#retrieveparty) | **GET** /party/{partyId} | Find party by ID
*PartyApi* | [**setParty**](docs/Api/PartyApi.md#setparty) | **POST** /party/set | Set (create or update) an Party
*PartyApi* | [**updateParty**](docs/Api/PartyApi.md#updateparty) | **PUT** /party/{partyId} | Update a party
*PauseApi* | [**createPause**](docs/Api/PauseApi.md#createpause) | **POST** /pause | Add a new Pause
*PauseApi* | [**deletePause**](docs/Api/PauseApi.md#deletepause) | **DELETE** /pause/{pauseId} | Delete a Pause
*PauseApi* | [**retrieveListPause**](docs/Api/PauseApi.md#retrievelistpause) | **PUT** /pause | Retrieve List of Pauses
*PauseApi* | [**retrievePause**](docs/Api/PauseApi.md#retrievepause) | **GET** /pause/{pauseId} | Retrieve a Pause
*PauseApi* | [**setPause**](docs/Api/PauseApi.md#setpause) | **POST** /pause/set | Set (create or update) a Pause
*PauseApi* | [**updatePause**](docs/Api/PauseApi.md#updatepause) | **PUT** /pause/{pauseId} | Update a Pause
*PlannerApi* | [**addActivitiesToRoute**](docs/Api/PlannerApi.md#addactivitiestoroute) | **POST** /planner/add-activities-to-route | Add Activities To Route
*PlannerApi* | [**applyPlanning**](docs/Api/PlannerApi.md#applyplanning) | **POST** /planner/apply-planning | Apply a planning schema
*PlannerApi* | [**autoPlan**](docs/Api/PlannerApi.md#autoplan) | **POST** /planner/auto-plan | Plan a certain activity in any fitting route
*PlannerApi* | [**autoPlanResult**](docs/Api/PlannerApi.md#autoplanresult) | **POST** /planner/auto-plan-result | Fetch current result for a auto plan Request. This could be done, in progress or cancelled.
*PlannerApi* | [**changeActivitySequence**](docs/Api/PlannerApi.md#changeactivitysequence) | **POST** /planner/change-activity-sequence | Change Activity Sequence
*PlannerApi* | [**checkAvailability**](docs/Api/PlannerApi.md#checkavailability) | **POST** /planner/check-availability | check availability in planning for a certain set of activity properties
*PlannerApi* | [**checkAvailabilityResult**](docs/Api/PlannerApi.md#checkavailabilityresult) | **POST** /planner/check-availability-result | Fetch current result for a checkAvailability Request. This could be done, in progress or cancelled.
*PlannerApi* | [**lockActivities**](docs/Api/PlannerApi.md#lockactivities) | **POST** /planner/lock-activities | Lock Activities on Route
*PlannerApi* | [**removeActivitiesFromRoute**](docs/Api/PlannerApi.md#removeactivitiesfromroute) | **POST** /planner/remove-activities-from-route | Remove Activities From Route
*PortalApi* | [**createPortal**](docs/Api/PortalApi.md#createportal) | **POST** /portal | Add a new Portal
*PortalApi* | [**deletePortal**](docs/Api/PortalApi.md#deleteportal) | **DELETE** /portal/{portalId} | Delete a Portal
*PortalApi* | [**retrieveListPortal**](docs/Api/PortalApi.md#retrievelistportal) | **PUT** /portal | Retrieve List of Portals
*PortalApi* | [**retrievePortal**](docs/Api/PortalApi.md#retrieveportal) | **GET** /portal/{portalId} | Retrieve a Portal
*PortalApi* | [**setPortal**](docs/Api/PortalApi.md#setportal) | **POST** /portal/set | Set (create or update) a Portal
*PortalApi* | [**updatePortal**](docs/Api/PortalApi.md#updateportal) | **PUT** /portal/{portalId} | Update a Portal
*PortalsettingApi* | [**createPortalSetting**](docs/Api/PortalsettingApi.md#createportalsetting) | **POST** /portal-setting | Add a new PortalSetting
*PortalsettingApi* | [**deletePortalSetting**](docs/Api/PortalsettingApi.md#deleteportalsetting) | **DELETE** /portal-setting/{portal-settingId} | Delete a PortalSetting
*PortalsettingApi* | [**retrieveListPortalSetting**](docs/Api/PortalsettingApi.md#retrievelistportalsetting) | **PUT** /portal-setting | Retrieve List of Portal Settings
*PortalsettingApi* | [**retrievePortalSetting**](docs/Api/PortalsettingApi.md#retrieveportalsetting) | **GET** /portal-setting/{portal-settingId} | Retrieve a PortalSetting
*PortalsettingApi* | [**setPortalSetting**](docs/Api/PortalsettingApi.md#setportalsetting) | **POST** /portal-setting/set | Set (create or update) a PortalSetting
*PortalsettingApi* | [**updatePortalSetting**](docs/Api/PortalsettingApi.md#updateportalsetting) | **PUT** /portal-setting/{portal-settingId} | Update a PortalSetting
*RecurrenceApi* | [**deleteRecurrence**](docs/Api/RecurrenceApi.md#deleterecurrence) | **DELETE** /recurrence/{recurrenceId} | Delete an Recurrence
*RecurrenceApi* | [**retrieveListRecurrence**](docs/Api/RecurrenceApi.md#retrievelistrecurrence) | **PUT** /recurrence | Retrieve List of Recurrences
*RecurrenceApi* | [**retrieveRecurrence**](docs/Api/RecurrenceApi.md#retrieverecurrence) | **GET** /recurrence/{recurrenceId} | Retrieve a Recurrence
*RecurrenceApi* | [**updateRecurrence**](docs/Api/RecurrenceApi.md#updaterecurrence) | **PUT** /recurrence/{recurrenceId} | Update a Recurrence
*RouteApi* | [**createRoute**](docs/Api/RouteApi.md#createroute) | **POST** /route | Add a new Route
*RouteApi* | [**deleteRoute**](docs/Api/RouteApi.md#deleteroute) | **DELETE** /route/{routeId} | Delete an Route
*RouteApi* | [**getExecutableActivities**](docs/Api/RouteApi.md#getexecutableactivities) | **POST** /route/get-executable-activities | Returns all activities in this route which hav enot been executed yet.
*RouteApi* | [**retrieveListRoute**](docs/Api/RouteApi.md#retrievelistroute) | **PUT** /route | Retrieve List of Routes
*RouteApi* | [**retrieveRoute**](docs/Api/RouteApi.md#retrieveroute) | **GET** /route/{routeId} | Retrieve a Route
*RouteApi* | [**routeStoreGeoLocations**](docs/Api/RouteApi.md#routestoregeolocations) | **POST** /route/store-geo-locations | Store tracked Geo Locations in bulk
*RouteApi* | [**setRoute**](docs/Api/RouteApi.md#setroute) | **POST** /route/set | Set (create or update) an Route
*RouteApi* | [**updateRoute**](docs/Api/RouteApi.md#updateroute) | **PUT** /route/{routeId} | Update a Route
*SaywhenApi* | [**saywhenRetrievePortalURL**](docs/Api/SaywhenApi.md#saywhenretrieveportalurl) | **GET** /saywhen/retrieve-portal-url/{activityId} | Retrieve SayWhen Portal URL
*SaywhenApi* | [**saywhenRetrievePortalURLs**](docs/Api/SaywhenApi.md#saywhenretrieveportalurls) | **PUT** /saywhen/retrieve-portal-urls | Retrieve SayWhen Portal URLs
*SaywhenApi* | [**saywhenRetrieveStatus**](docs/Api/SaywhenApi.md#saywhenretrievestatus) | **GET** /saywhen/retrieve-status/{activityId} | Retrieve SayWhen Status
*SettingsApi* | [**retrieveListSettings**](docs/Api/SettingsApi.md#retrievelistsettings) | **PUT** /settings | Retrieve List of Settings
*SettingsApi* | [**retrieveSettings**](docs/Api/SettingsApi.md#retrievesettings) | **GET** /settings/{settingsId} | Retrieve a Settings
*SettingsApi* | [**setSetting**](docs/Api/SettingsApi.md#setsetting) | **POST** /settings/set | Set (update) Setting value
*SettingsApi* | [**updateSettings**](docs/Api/SettingsApi.md#updatesettings) | **PUT** /settings/{settingsId} | Update a Settings
*SystemApi* | [**systemGetConfig**](docs/Api/SystemApi.md#systemgetconfig) | **GET** /system/get-config | Retrieve System Configuration
*SystemApi* | [**systemGetSayWhenConfig**](docs/Api/SystemApi.md#systemgetsaywhenconfig) | **GET** /system/get-say-when-config | Retrieve SayWhen System Configuration
*SystemApi* | [**systemGetVariables**](docs/Api/SystemApi.md#systemgetvariables) | **GET** /system/get-variables | Retrieve System Variables
*TagsApi* | [**addTagToObject**](docs/Api/TagsApi.md#addtagtoobject) | **POST** /tags/add-tag-to-object | adds a tag to an object
*TagsApi* | [**createTag**](docs/Api/TagsApi.md#createtag) | **POST** /tags | Add a new Tag
*TagsApi* | [**deleteTag**](docs/Api/TagsApi.md#deletetag) | **DELETE** /tags/{tagId} | Delete a Tag
*TagsApi* | [**retrieveListTags**](docs/Api/TagsApi.md#retrievelisttags) | **PUT** /tags | Retrieve List of Tags
*TagsApi* | [**retrieveTag**](docs/Api/TagsApi.md#retrievetag) | **GET** /tags/{tagId} | Retrieve a Tag
*TagsApi* | [**updateTag**](docs/Api/TagsApi.md#updatetag) | **PUT** /tags/{tagId} | Update a Tag
*TagtypeApi* | [**createTagType**](docs/Api/TagtypeApi.md#createtagtype) | **POST** /tag-type | Add a new Tag type
*TagtypeApi* | [**deleteTagType**](docs/Api/TagtypeApi.md#deletetagtype) | **DELETE** /tag-type/{tagTypeId} | Delete a Tag type
*TagtypeApi* | [**retrieveListTagType**](docs/Api/TagtypeApi.md#retrievelisttagtype) | **PUT** /tag-type | Retrieve List of Tag types
*TagtypeApi* | [**retrieveTagType**](docs/Api/TagtypeApi.md#retrievetagtype) | **GET** /tag-type/{tagTypeId} | Retrieve a Tag type
*TagtypeApi* | [**setTagType**](docs/Api/TagtypeApi.md#settagtype) | **POST** /tag-type/set | Set (create or update) Tag type
*TagtypeApi* | [**updateTagType**](docs/Api/TagtypeApi.md#updatetagtype) | **PUT** /tag-type/{tagTypeId} | Update a Tag type
*TracktraceApi* | [**trackTraceCalculateETA**](docs/Api/TracktraceApi.md#tracktracecalculateeta) | **GET** /track-and-trace/calculate-eta/{activityId} | Calculate ETA for Activity
*TrailerApi* | [**createTrailer**](docs/Api/TrailerApi.md#createtrailer) | **POST** /trailer | Add a trailer
*TrailerApi* | [**deleteTrailer**](docs/Api/TrailerApi.md#deletetrailer) | **DELETE** /trailer/{trailerId} | Delete an trailer
*TrailerApi* | [**retrieveListTrailer**](docs/Api/TrailerApi.md#retrievelisttrailer) | **PUT** /trailer | Retrieve List of Trailers
*TrailerApi* | [**retrieveTrailer**](docs/Api/TrailerApi.md#retrievetrailer) | **GET** /trailer/{trailerId} | Find trailer by ID
*TrailerApi* | [**setTrailer**](docs/Api/TrailerApi.md#settrailer) | **POST** /trailer/set | Set (create or update) a trailer
*TrailerApi* | [**updateTrailer**](docs/Api/TrailerApi.md#updatetrailer) | **PUT** /trailer/{trailerId} | Update a trailer
*UsersApi* | [**checkCredentialsUser**](docs/Api/UsersApi.md#checkcredentialsuser) | **GET** /users/check-credentials | Checks the credentials of a User
*UsersApi* | [**retrieveListUsers**](docs/Api/UsersApi.md#retrievelistusers) | **PUT** /users | Retrieve List of Users
*UsersApi* | [**retrieveUsers**](docs/Api/UsersApi.md#retrieveusers) | **GET** /users/{usersId} | Retrieve a Users
*UsersApi* | [**setUser**](docs/Api/UsersApi.md#setuser) | **POST** /users/set | Set (create or update) a User
*UsersApi* | [**updateUsers**](docs/Api/UsersApi.md#updateusers) | **PUT** /users/{usersId} | Update a Users
*VehicleApi* | [**createVehicle**](docs/Api/VehicleApi.md#createvehicle) | **POST** /vehicle | Add a vehicle
*VehicleApi* | [**deleteVehicle**](docs/Api/VehicleApi.md#deletevehicle) | **DELETE** /vehicle/{vehicleId} | Delete a vehicle
*VehicleApi* | [**retrieveListVehicle**](docs/Api/VehicleApi.md#retrievelistvehicle) | **PUT** /vehicle | Retrieve List of Vehicles
*VehicleApi* | [**retrieveVehicle**](docs/Api/VehicleApi.md#retrievevehicle) | **GET** /vehicle/{vehicleId} | Find vehicle by ID
*VehicleApi* | [**setVehicle**](docs/Api/VehicleApi.md#setvehicle) | **POST** /vehicle/set | Set (create or update) a vehicle
*VehicleApi* | [**updateVehicle**](docs/Api/VehicleApi.md#updatevehicle) | **PUT** /vehicle/{vehicleId} | Update a vehicle
*WebhookApi* | [**triggerWebHook**](docs/Api/WebhookApi.md#triggerwebhook) | **POST** /web-hook/trigger | Trigger a webhook
*WorkerApi* | [**addActionToWorkerStack**](docs/Api/WorkerApi.md#addactiontoworkerstack) | **POST** /worker/add-action-to-stack | Add Action To Worker Stack
*ZoneApi* | [**createZone**](docs/Api/ZoneApi.md#createzone) | **POST** /zone | Add a new Zone
*ZoneApi* | [**deleteZone**](docs/Api/ZoneApi.md#deletezone) | **DELETE** /zone/{zoneId} | Delete a Zone
*ZoneApi* | [**retrieveListZone**](docs/Api/ZoneApi.md#retrievelistzone) | **PUT** /zone | Retrieve List of Zone
*ZoneApi* | [**retrieveZone**](docs/Api/ZoneApi.md#retrievezone) | **GET** /zone/{zoneId} | Retrieve a Zone
*ZoneApi* | [**setZone**](docs/Api/ZoneApi.md#setzone) | **POST** /zone/set | Set (create or update) a Zone
*ZoneApi* | [**updateZone**](docs/Api/ZoneApi.md#updatezone) | **PUT** /zone/{zoneId} | Update a Zone


## Documentation For Models

 - [ActivityFiltersModel](docs/Model/ActivityFiltersModel.md)
 - [ActivityListResponse](docs/Model/ActivityListResponse.md)
 - [ActivityModel](docs/Model/ActivityModel.md)
 - [ActivityOptionsModel](docs/Model/ActivityOptionsModel.md)
 - [ActivityRetrieveListArguments](docs/Model/ActivityRetrieveListArguments.md)
 - [ActivityTypeFiltersModel](docs/Model/ActivityTypeFiltersModel.md)
 - [ActivityTypeListResponse](docs/Model/ActivityTypeListResponse.md)
 - [ActivityTypeModel](docs/Model/ActivityTypeModel.md)
 - [ActivityTypeOptionsModel](docs/Model/ActivityTypeOptionsModel.md)
 - [ActivityTypeRetrieveListArguments](docs/Model/ActivityTypeRetrieveListArguments.md)
 - [AddTagToObjectArguments](docs/Model/AddTagToObjectArguments.md)
 - [AddTagToObjectDataModel](docs/Model/AddTagToObjectDataModel.md)
 - [AddTagToObjectFiltersModel](docs/Model/AddTagToObjectFiltersModel.md)
 - [AddTagToObjectOptionsModel](docs/Model/AddTagToObjectOptionsModel.md)
 - [AddressAppliedModel](docs/Model/AddressAppliedModel.md)
 - [AddressFiltersModel](docs/Model/AddressFiltersModel.md)
 - [AddressListResponse](docs/Model/AddressListResponse.md)
 - [AddressModel](docs/Model/AddressModel.md)
 - [AddressOptionsModel](docs/Model/AddressOptionsModel.md)
 - [AddressRetrieveListArguments](docs/Model/AddressRetrieveListArguments.md)
 - [AddressReverseGeoCodeArguments](docs/Model/AddressReverseGeoCodeArguments.md)
 - [AddressReverseGeoCodeResponse](docs/Model/AddressReverseGeoCodeResponse.md)
 - [ApiResponse](docs/Model/ApiResponse.md)
 - [ApplyPlanningArguments](docs/Model/ApplyPlanningArguments.md)
 - [ApplyPlanningDataModel](docs/Model/ApplyPlanningDataModel.md)
 - [ApplyPlanningFiltersModel](docs/Model/ApplyPlanningFiltersModel.md)
 - [ApplyPlanningOptionsModel](docs/Model/ApplyPlanningOptionsModel.md)
 - [AssignmentFiltersModel](docs/Model/AssignmentFiltersModel.md)
 - [AssignmentListResponse](docs/Model/AssignmentListResponse.md)
 - [AssignmentModel](docs/Model/AssignmentModel.md)
 - [AssignmentOptionsModel](docs/Model/AssignmentOptionsModel.md)
 - [AssignmentRetrieveListArguments](docs/Model/AssignmentRetrieveListArguments.md)
 - [AuthenticateModel](docs/Model/AuthenticateModel.md)
 - [AutoPlanArguments](docs/Model/AutoPlanArguments.md)
 - [AutoPlanDataModel](docs/Model/AutoPlanDataModel.md)
 - [AutoPlanFiltersModel](docs/Model/AutoPlanFiltersModel.md)
 - [AutoPlanOptionsModel](docs/Model/AutoPlanOptionsModel.md)
 - [AutoPlanResponse](docs/Model/AutoPlanResponse.md)
 - [AvailabilityFollowUpTimeSlotModel](docs/Model/AvailabilityFollowUpTimeSlotModel.md)
 - [AvailabilityTimeSlotImpactModel](docs/Model/AvailabilityTimeSlotImpactModel.md)
 - [AvailabilityTimeSlotModel](docs/Model/AvailabilityTimeSlotModel.md)
 - [BrandColourFiltersModel](docs/Model/BrandColourFiltersModel.md)
 - [BrandColourModel](docs/Model/BrandColourModel.md)
 - [BrandColourOptionsModel](docs/Model/BrandColourOptionsModel.md)
 - [BrandColourRetrieveListArguments](docs/Model/BrandColourRetrieveListArguments.md)
 - [BrandFiltersModel](docs/Model/BrandFiltersModel.md)
 - [BrandListResponse](docs/Model/BrandListResponse.md)
 - [BrandModel](docs/Model/BrandModel.md)
 - [BrandOptionsModel](docs/Model/BrandOptionsModel.md)
 - [BrandRetrieveListArguments](docs/Model/BrandRetrieveListArguments.md)
 - [CapacityModel](docs/Model/CapacityModel.md)
 - [CapacityTypeFiltersModel](docs/Model/CapacityTypeFiltersModel.md)
 - [CapacityTypeListResponse](docs/Model/CapacityTypeListResponse.md)
 - [CapacityTypeModel](docs/Model/CapacityTypeModel.md)
 - [CapacityTypeOptionsModel](docs/Model/CapacityTypeOptionsModel.md)
 - [CapacityTypeRetrieveListArguments](docs/Model/CapacityTypeRetrieveListArguments.md)
 - [CheckAvailabilityArguments](docs/Model/CheckAvailabilityArguments.md)
 - [CheckAvailabilityDataModel](docs/Model/CheckAvailabilityDataModel.md)
 - [CheckAvailabilityFiltersModel](docs/Model/CheckAvailabilityFiltersModel.md)
 - [CheckAvailabilityOptionsModel](docs/Model/CheckAvailabilityOptionsModel.md)
 - [CheckAvailabilityResponse](docs/Model/CheckAvailabilityResponse.md)
 - [CommunicationModel](docs/Model/CommunicationModel.md)
 - [ConfigModel](docs/Model/ConfigModel.md)
 - [CredentialsModel](docs/Model/CredentialsModel.md)
 - [DriverFiltersModel](docs/Model/DriverFiltersModel.md)
 - [DriverListResponse](docs/Model/DriverListResponse.md)
 - [DriverModel](docs/Model/DriverModel.md)
 - [DriverOptionsModel](docs/Model/DriverOptionsModel.md)
 - [DriverRetrieveListArguments](docs/Model/DriverRetrieveListArguments.md)
 - [EmailModel](docs/Model/EmailModel.md)
 - [EquipmentFiltersModel](docs/Model/EquipmentFiltersModel.md)
 - [EquipmentListResponse](docs/Model/EquipmentListResponse.md)
 - [EquipmentModel](docs/Model/EquipmentModel.md)
 - [EquipmentOptionsModel](docs/Model/EquipmentOptionsModel.md)
 - [EquipmentRetrieveListArguments](docs/Model/EquipmentRetrieveListArguments.md)
 - [FileCopyArguments](docs/Model/FileCopyArguments.md)
 - [FileFiltersModel](docs/Model/FileFiltersModel.md)
 - [FileModel](docs/Model/FileModel.md)
 - [FileOptionsModel](docs/Model/FileOptionsModel.md)
 - [FileRetrieveListArguments](docs/Model/FileRetrieveListArguments.md)
 - [GPSLocationModel](docs/Model/GPSLocationModel.md)
 - [GetExecutableActivitiesArguments](docs/Model/GetExecutableActivitiesArguments.md)
 - [GetExecutableActivitiesDataModel](docs/Model/GetExecutableActivitiesDataModel.md)
 - [GetExecutableActivitiesFiltersModel](docs/Model/GetExecutableActivitiesFiltersModel.md)
 - [GetExecutableActivitiesOptionsModel](docs/Model/GetExecutableActivitiesOptionsModel.md)
 - [InstructionModel](docs/Model/InstructionModel.md)
 - [LinkModel](docs/Model/LinkModel.md)
 - [LogFiltersModel](docs/Model/LogFiltersModel.md)
 - [LogListResponse](docs/Model/LogListResponse.md)
 - [LogModel](docs/Model/LogModel.md)
 - [LogOptionsModel](docs/Model/LogOptionsModel.md)
 - [LogRetrieveListArguments](docs/Model/LogRetrieveListArguments.md)
 - [MetaDataModel](docs/Model/MetaDataModel.md)
 - [NoteFiltersModel](docs/Model/NoteFiltersModel.md)
 - [NoteModel](docs/Model/NoteModel.md)
 - [NoteOptionsModel](docs/Model/NoteOptionsModel.md)
 - [NoteRetrieveListArguments](docs/Model/NoteRetrieveListArguments.md)
 - [PackageLineFiltersModel](docs/Model/PackageLineFiltersModel.md)
 - [PackageLineListResponse](docs/Model/PackageLineListResponse.md)
 - [PackageLineModel](docs/Model/PackageLineModel.md)
 - [PackageLineOptionsModel](docs/Model/PackageLineOptionsModel.md)
 - [PackageLineRetrieveListArguments](docs/Model/PackageLineRetrieveListArguments.md)
 - [PackageLineUpdateArguments](docs/Model/PackageLineUpdateArguments.md)
 - [PackageTypeFiltersModel](docs/Model/PackageTypeFiltersModel.md)
 - [PackageTypeListResponse](docs/Model/PackageTypeListResponse.md)
 - [PackageTypeModel](docs/Model/PackageTypeModel.md)
 - [PackageTypeOptionsModel](docs/Model/PackageTypeOptionsModel.md)
 - [PackageTypeRetrieveListArguments](docs/Model/PackageTypeRetrieveListArguments.md)
 - [PartyFiltersModel](docs/Model/PartyFiltersModel.md)
 - [PartyListResponse](docs/Model/PartyListResponse.md)
 - [PartyModel](docs/Model/PartyModel.md)
 - [PartyOptionsModel](docs/Model/PartyOptionsModel.md)
 - [PartyRetrieveListArguments](docs/Model/PartyRetrieveListArguments.md)
 - [PauseFiltersModel](docs/Model/PauseFiltersModel.md)
 - [PauseListResponse](docs/Model/PauseListResponse.md)
 - [PauseModel](docs/Model/PauseModel.md)
 - [PauseOptionsModel](docs/Model/PauseOptionsModel.md)
 - [PauseRetrieveListArguments](docs/Model/PauseRetrieveListArguments.md)
 - [PhoneNrModel](docs/Model/PhoneNrModel.md)
 - [PortalFiltersModel](docs/Model/PortalFiltersModel.md)
 - [PortalListResponse](docs/Model/PortalListResponse.md)
 - [PortalModel](docs/Model/PortalModel.md)
 - [PortalOptionsModel](docs/Model/PortalOptionsModel.md)
 - [PortalRetrieveListArguments](docs/Model/PortalRetrieveListArguments.md)
 - [PortalSettingFiltersModel](docs/Model/PortalSettingFiltersModel.md)
 - [PortalSettingListResponse](docs/Model/PortalSettingListResponse.md)
 - [PortalSettingModel](docs/Model/PortalSettingModel.md)
 - [PortalSettingOptionsModel](docs/Model/PortalSettingOptionsModel.md)
 - [PortalSettingRetrieveListArguments](docs/Model/PortalSettingRetrieveListArguments.md)
 - [RecurrenceFiltersModel](docs/Model/RecurrenceFiltersModel.md)
 - [RecurrenceModel](docs/Model/RecurrenceModel.md)
 - [RecurrenceOptionsModel](docs/Model/RecurrenceOptionsModel.md)
 - [RecurrenceRetrieveListArguments](docs/Model/RecurrenceRetrieveListArguments.md)
 - [RemoveActivitiesFromRouteArguments](docs/Model/RemoveActivitiesFromRouteArguments.md)
 - [RouteFiltersModel](docs/Model/RouteFiltersModel.md)
 - [RouteListResponse](docs/Model/RouteListResponse.md)
 - [RouteModel](docs/Model/RouteModel.md)
 - [RouteOptionsModel](docs/Model/RouteOptionsModel.md)
 - [RouteRetrieveListArguments](docs/Model/RouteRetrieveListArguments.md)
 - [RouteStoreGeoLocations](docs/Model/RouteStoreGeoLocations.md)
 - [SayWhenConfigModel](docs/Model/SayWhenConfigModel.md)
 - [SayWhenRetrievePortalURLsArguments](docs/Model/SayWhenRetrievePortalURLsArguments.md)
 - [SayWhenVisitModel](docs/Model/SayWhenVisitModel.md)
 - [SettingsFiltersModel](docs/Model/SettingsFiltersModel.md)
 - [SettingsModel](docs/Model/SettingsModel.md)
 - [SettingsOptionsModel](docs/Model/SettingsOptionsModel.md)
 - [SettingsRetrieveListArguments](docs/Model/SettingsRetrieveListArguments.md)
 - [TagListResponse](docs/Model/TagListResponse.md)
 - [TagModel](docs/Model/TagModel.md)
 - [TagTypeFiltersModel](docs/Model/TagTypeFiltersModel.md)
 - [TagTypeModel](docs/Model/TagTypeModel.md)
 - [TagTypeOptionsModel](docs/Model/TagTypeOptionsModel.md)
 - [TagTypeRetrieveListArguments](docs/Model/TagTypeRetrieveListArguments.md)
 - [TagsFiltersModel](docs/Model/TagsFiltersModel.md)
 - [TagsOptionsModel](docs/Model/TagsOptionsModel.md)
 - [TagsRetrieveListArguments](docs/Model/TagsRetrieveListArguments.md)
 - [TimeSlotModel](docs/Model/TimeSlotModel.md)
 - [TrailerFiltersModel](docs/Model/TrailerFiltersModel.md)
 - [TrailerModel](docs/Model/TrailerModel.md)
 - [TrailerOptionsModel](docs/Model/TrailerOptionsModel.md)
 - [TrailerRetrieveListArguments](docs/Model/TrailerRetrieveListArguments.md)
 - [UnitValueModel](docs/Model/UnitValueModel.md)
 - [UomModel](docs/Model/UomModel.md)
 - [UsersFiltersModel](docs/Model/UsersFiltersModel.md)
 - [UsersListResponse](docs/Model/UsersListResponse.md)
 - [UsersModel](docs/Model/UsersModel.md)
 - [UsersOptionsModel](docs/Model/UsersOptionsModel.md)
 - [UsersRetrieveListArguments](docs/Model/UsersRetrieveListArguments.md)
 - [VariablesModel](docs/Model/VariablesModel.md)
 - [VehicleFiltersModel](docs/Model/VehicleFiltersModel.md)
 - [VehicleModel](docs/Model/VehicleModel.md)
 - [VehicleOptionsModel](docs/Model/VehicleOptionsModel.md)
 - [VehicleRetrieveListArguments](docs/Model/VehicleRetrieveListArguments.md)
 - [ZoneFiltersModel](docs/Model/ZoneFiltersModel.md)
 - [ZoneModel](docs/Model/ZoneModel.md)
 - [ZoneOptionsModel](docs/Model/ZoneOptionsModel.md)
 - [ZoneRangeFiltersModel](docs/Model/ZoneRangeFiltersModel.md)
 - [ZoneRangeModel](docs/Model/ZoneRangeModel.md)
 - [ZoneRangeOptionsModel](docs/Model/ZoneRangeOptionsModel.md)
 - [ZoneRangeRetrieveListArguments](docs/Model/ZoneRangeRetrieveListArguments.md)
 - [ZoneRetrieveListArguments](docs/Model/ZoneRetrieveListArguments.md)


## Documentation For Authorization


## api_key

- **Type**: API key
- **API key parameter name**: ApiKey
- **Location**: HTTP header


## Author

gerb@bumbal.eu


