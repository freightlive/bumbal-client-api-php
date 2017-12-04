<?php
/**
 * PackageLineModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client Api
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\BumbalClient\Model;

use \ArrayAccess;
use \BumbalClient\ObjectSerializer;

/**
 * PackageLineModel Class Doc Comment
 *
 * @category Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PackageLineModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PackageLineModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'activity_id' => 'int[]',
        'nr' => 'string',
        'status_id' => 'int',
        'status_name' => 'string',
        'nr_of_packages' => 'int',
        'package_type_name' => 'string',
        'package_type_id' => 'int',
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'unit_volume' => 'float',
        'net_weight_unit' => 'float',
        'net_weight_total' => 'float',
        'tare_weight_unit' => 'float',
        'tare_weight_total' => 'float',
        'gross_weight_unit' => 'float',
        'gross_weight_total' => 'float',
        'unit_loading_meter' => 'float',
        'barcode' => 'string',
        'adr' => 'bool',
        'adr_class' => 'int',
        'adr_un_nr' => 'int',
        'temp' => 'bool',
        'temp_min' => 'float',
        'temp_max' => 'float',
        'capacity_volume' => 'float',
        'capacity_loading_meter' => 'float',
        'capacity_loading_weight' => 'float',
        'hs_code' => 'string',
        'description' => 'string',
        'activity_links' => '\BumbalClient\BumbalClient\Model\LinkModel[]',
        'links' => '\BumbalClient\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\BumbalClient\Model\MetaDataModel[]',
        'notes' => '\BumbalClient\BumbalClient\Model\NoteModel[]',
        'files' => '\BumbalClient\BumbalClient\Model\FileModel[]',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'activity_id' => null,
        'nr' => null,
        'status_id' => null,
        'status_name' => null,
        'nr_of_packages' => 'int64',
        'package_type_name' => null,
        'package_type_id' => null,
        'length' => 'float',
        'width' => 'float',
        'height' => 'float',
        'unit_volume' => 'float',
        'net_weight_unit' => 'float',
        'net_weight_total' => 'float',
        'tare_weight_unit' => 'float',
        'tare_weight_total' => 'float',
        'gross_weight_unit' => 'float',
        'gross_weight_total' => 'float',
        'unit_loading_meter' => 'float',
        'barcode' => null,
        'adr' => null,
        'adr_class' => 'int64',
        'adr_un_nr' => 'int64',
        'temp' => null,
        'temp_min' => 'float',
        'temp_max' => 'float',
        'capacity_volume' => 'float',
        'capacity_loading_meter' => 'float',
        'capacity_loading_weight' => 'float',
        'hs_code' => null,
        'description' => null,
        'activity_links' => null,
        'links' => null,
        'meta_data' => null,
        'notes' => null,
        'files' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'activity_id' => 'activity_id',
        'nr' => 'nr',
        'status_id' => 'status_id',
        'status_name' => 'status_name',
        'nr_of_packages' => 'nr_of_packages',
        'package_type_name' => 'package_type_name',
        'package_type_id' => 'package_type_id',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'unit_volume' => 'unit_volume',
        'net_weight_unit' => 'net_weight_unit',
        'net_weight_total' => 'net_weight_total',
        'tare_weight_unit' => 'tare_weight_unit',
        'tare_weight_total' => 'tare_weight_total',
        'gross_weight_unit' => 'gross_weight_unit',
        'gross_weight_total' => 'gross_weight_total',
        'unit_loading_meter' => 'unit_loading_meter',
        'barcode' => 'barcode',
        'adr' => 'ADR',
        'adr_class' => 'ADR_class',
        'adr_un_nr' => 'ADR_UN_nr',
        'temp' => 'temp',
        'temp_min' => 'temp_min',
        'temp_max' => 'temp_max',
        'capacity_volume' => 'capacity_volume',
        'capacity_loading_meter' => 'capacity_loading_meter',
        'capacity_loading_weight' => 'capacity_loading_weight',
        'hs_code' => 'hs_code',
        'description' => 'description',
        'activity_links' => 'activity_links',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'notes' => 'notes',
        'files' => 'files',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'activity_id' => 'setActivityId',
        'nr' => 'setNr',
        'status_id' => 'setStatusId',
        'status_name' => 'setStatusName',
        'nr_of_packages' => 'setNrOfPackages',
        'package_type_name' => 'setPackageTypeName',
        'package_type_id' => 'setPackageTypeId',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'unit_volume' => 'setUnitVolume',
        'net_weight_unit' => 'setNetWeightUnit',
        'net_weight_total' => 'setNetWeightTotal',
        'tare_weight_unit' => 'setTareWeightUnit',
        'tare_weight_total' => 'setTareWeightTotal',
        'gross_weight_unit' => 'setGrossWeightUnit',
        'gross_weight_total' => 'setGrossWeightTotal',
        'unit_loading_meter' => 'setUnitLoadingMeter',
        'barcode' => 'setBarcode',
        'adr' => 'setAdr',
        'adr_class' => 'setAdrClass',
        'adr_un_nr' => 'setAdrUnNr',
        'temp' => 'setTemp',
        'temp_min' => 'setTempMin',
        'temp_max' => 'setTempMax',
        'capacity_volume' => 'setCapacityVolume',
        'capacity_loading_meter' => 'setCapacityLoadingMeter',
        'capacity_loading_weight' => 'setCapacityLoadingWeight',
        'hs_code' => 'setHsCode',
        'description' => 'setDescription',
        'activity_links' => 'setActivityLinks',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'notes' => 'setNotes',
        'files' => 'setFiles',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'activity_id' => 'getActivityId',
        'nr' => 'getNr',
        'status_id' => 'getStatusId',
        'status_name' => 'getStatusName',
        'nr_of_packages' => 'getNrOfPackages',
        'package_type_name' => 'getPackageTypeName',
        'package_type_id' => 'getPackageTypeId',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'unit_volume' => 'getUnitVolume',
        'net_weight_unit' => 'getNetWeightUnit',
        'net_weight_total' => 'getNetWeightTotal',
        'tare_weight_unit' => 'getTareWeightUnit',
        'tare_weight_total' => 'getTareWeightTotal',
        'gross_weight_unit' => 'getGrossWeightUnit',
        'gross_weight_total' => 'getGrossWeightTotal',
        'unit_loading_meter' => 'getUnitLoadingMeter',
        'barcode' => 'getBarcode',
        'adr' => 'getAdr',
        'adr_class' => 'getAdrClass',
        'adr_un_nr' => 'getAdrUnNr',
        'temp' => 'getTemp',
        'temp_min' => 'getTempMin',
        'temp_max' => 'getTempMax',
        'capacity_volume' => 'getCapacityVolume',
        'capacity_loading_meter' => 'getCapacityLoadingMeter',
        'capacity_loading_weight' => 'getCapacityLoadingWeight',
        'hs_code' => 'getHsCode',
        'description' => 'getDescription',
        'activity_links' => 'getActivityLinks',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'notes' => 'getNotes',
        'files' => 'getFiles',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_NAME_CANCELLED = 'package_line_cancelled';
    const STATUS_NAME_INCOMPLETE = 'package_line_incomplete';
    const STATUS_NAME__NEW = 'package_line_new';
    const STATUS_NAME_AWAITING = 'package_line_awaiting';
    const STATUS_NAME_ACCEPTED = 'package_line_accepted';
    const STATUS_NAME_PLANNED = 'package_line_planned';
    const STATUS_NAME_IN_PROGRESS = 'package_line_in_progress';
    const STATUS_NAME_EXECUTED = 'package_line_executed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusNameAllowableValues()
    {
        return [
            self::STATUS_NAME_CANCELLED,
            self::STATUS_NAME_INCOMPLETE,
            self::STATUS_NAME__NEW,
            self::STATUS_NAME_AWAITING,
            self::STATUS_NAME_ACCEPTED,
            self::STATUS_NAME_PLANNED,
            self::STATUS_NAME_IN_PROGRESS,
            self::STATUS_NAME_EXECUTED,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['nr'] = isset($data['nr']) ? $data['nr'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['status_name'] = isset($data['status_name']) ? $data['status_name'] : null;
        $this->container['nr_of_packages'] = isset($data['nr_of_packages']) ? $data['nr_of_packages'] : null;
        $this->container['package_type_name'] = isset($data['package_type_name']) ? $data['package_type_name'] : null;
        $this->container['package_type_id'] = isset($data['package_type_id']) ? $data['package_type_id'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['unit_volume'] = isset($data['unit_volume']) ? $data['unit_volume'] : null;
        $this->container['net_weight_unit'] = isset($data['net_weight_unit']) ? $data['net_weight_unit'] : null;
        $this->container['net_weight_total'] = isset($data['net_weight_total']) ? $data['net_weight_total'] : null;
        $this->container['tare_weight_unit'] = isset($data['tare_weight_unit']) ? $data['tare_weight_unit'] : null;
        $this->container['tare_weight_total'] = isset($data['tare_weight_total']) ? $data['tare_weight_total'] : null;
        $this->container['gross_weight_unit'] = isset($data['gross_weight_unit']) ? $data['gross_weight_unit'] : null;
        $this->container['gross_weight_total'] = isset($data['gross_weight_total']) ? $data['gross_weight_total'] : null;
        $this->container['unit_loading_meter'] = isset($data['unit_loading_meter']) ? $data['unit_loading_meter'] : null;
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['adr'] = isset($data['adr']) ? $data['adr'] : null;
        $this->container['adr_class'] = isset($data['adr_class']) ? $data['adr_class'] : null;
        $this->container['adr_un_nr'] = isset($data['adr_un_nr']) ? $data['adr_un_nr'] : null;
        $this->container['temp'] = isset($data['temp']) ? $data['temp'] : null;
        $this->container['temp_min'] = isset($data['temp_min']) ? $data['temp_min'] : null;
        $this->container['temp_max'] = isset($data['temp_max']) ? $data['temp_max'] : null;
        $this->container['capacity_volume'] = isset($data['capacity_volume']) ? $data['capacity_volume'] : null;
        $this->container['capacity_loading_meter'] = isset($data['capacity_loading_meter']) ? $data['capacity_loading_meter'] : null;
        $this->container['capacity_loading_weight'] = isset($data['capacity_loading_weight']) ? $data['capacity_loading_weight'] : null;
        $this->container['hs_code'] = isset($data['hs_code']) ? $data['hs_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['activity_links'] = isset($data['activity_links']) ? $data['activity_links'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getStatusNameAllowableValues();
        if (!in_array($this->container['status_name'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_name', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusNameAllowableValues();
        if (!in_array($this->container['status_name'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique Identifier
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets activity_id
     *
     * @return int[]
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     *
     * @param int[] $activity_id Unique Identifier for activities where this packageline is related to
     *
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets nr
     *
     * @return string
     */
    public function getNr()
    {
        return $this->container['nr'];
    }

    /**
     * Sets nr
     *
     * @param string $nr Number of this PackageLine
     *
     * @return $this
     */
    public function setNr($nr)
    {
        $this->container['nr'] = $nr;

        return $this;
    }

    /**
     * Gets status_id
     *
     * @return int
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     *
     * @param int $status_id StatusId of this PackageLine, 31: package_line_cancelled, 23: package_line_incomplete, 24: package_line_new, 42: package_line_awaiting, 25: package_line_accepted, 10: package_line_planned, 11: package_line_in_progress, 12: package_line_executed
     *
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets status_name
     *
     * @return string
     */
    public function getStatusName()
    {
        return $this->container['status_name'];
    }

    /**
     * Sets status_name
     *
     * @param string $status_name PackageLine Status
     *
     * @return $this
     */
    public function setStatusName($status_name)
    {
        $allowedValues = $this->getStatusNameAllowableValues();
        if (!is_null($status_name) && !in_array($status_name, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_name', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_name'] = $status_name;

        return $this;
    }

    /**
     * Gets nr_of_packages
     *
     * @return int
     */
    public function getNrOfPackages()
    {
        return $this->container['nr_of_packages'];
    }

    /**
     * Sets nr_of_packages
     *
     * @param int $nr_of_packages Number of packages in package line
     *
     * @return $this
     */
    public function setNrOfPackages($nr_of_packages)
    {
        $this->container['nr_of_packages'] = $nr_of_packages;

        return $this;
    }

    /**
     * Gets package_type_name
     *
     * @return string
     */
    public function getPackageTypeName()
    {
        return $this->container['package_type_name'];
    }

    /**
     * Sets package_type_name
     *
     * @param string $package_type_name Type of the Packages in the package line
     *
     * @return $this
     */
    public function setPackageTypeName($package_type_name)
    {
        $this->container['package_type_name'] = $package_type_name;

        return $this;
    }

    /**
     * Gets package_type_id
     *
     * @return int
     */
    public function getPackageTypeId()
    {
        return $this->container['package_type_id'];
    }

    /**
     * Sets package_type_id
     *
     * @param int $package_type_id ID of the package type for the packages in this PackageLine
     *
     * @return $this
     */
    public function setPackageTypeId($package_type_id)
    {
        $this->container['package_type_id'] = $package_type_id;

        return $this;
    }

    /**
     * Gets length
     *
     * @return float
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param float $length length of a single package in this package line
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float $width width of a single package in this package line
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float $height height of a single package in this package line
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets unit_volume
     *
     * @return float
     */
    public function getUnitVolume()
    {
        return $this->container['unit_volume'];
    }

    /**
     * Sets unit_volume
     *
     * @param float $unit_volume volume of a single package in this package line
     *
     * @return $this
     */
    public function setUnitVolume($unit_volume)
    {
        $this->container['unit_volume'] = $unit_volume;

        return $this;
    }

    /**
     * Gets net_weight_unit
     *
     * @return float
     */
    public function getNetWeightUnit()
    {
        return $this->container['net_weight_unit'];
    }

    /**
     * Sets net_weight_unit
     *
     * @param float $net_weight_unit net weight of a single package in this package line
     *
     * @return $this
     */
    public function setNetWeightUnit($net_weight_unit)
    {
        $this->container['net_weight_unit'] = $net_weight_unit;

        return $this;
    }

    /**
     * Gets net_weight_total
     *
     * @return float
     */
    public function getNetWeightTotal()
    {
        return $this->container['net_weight_total'];
    }

    /**
     * Sets net_weight_total
     *
     * @param float $net_weight_total net weight of a all packages in this package line
     *
     * @return $this
     */
    public function setNetWeightTotal($net_weight_total)
    {
        $this->container['net_weight_total'] = $net_weight_total;

        return $this;
    }

    /**
     * Gets tare_weight_unit
     *
     * @return float
     */
    public function getTareWeightUnit()
    {
        return $this->container['tare_weight_unit'];
    }

    /**
     * Sets tare_weight_unit
     *
     * @param float $tare_weight_unit tare weight of a single package in this package line
     *
     * @return $this
     */
    public function setTareWeightUnit($tare_weight_unit)
    {
        $this->container['tare_weight_unit'] = $tare_weight_unit;

        return $this;
    }

    /**
     * Gets tare_weight_total
     *
     * @return float
     */
    public function getTareWeightTotal()
    {
        return $this->container['tare_weight_total'];
    }

    /**
     * Sets tare_weight_total
     *
     * @param float $tare_weight_total tare weight of a all packages in this package line
     *
     * @return $this
     */
    public function setTareWeightTotal($tare_weight_total)
    {
        $this->container['tare_weight_total'] = $tare_weight_total;

        return $this;
    }

    /**
     * Gets gross_weight_unit
     *
     * @return float
     */
    public function getGrossWeightUnit()
    {
        return $this->container['gross_weight_unit'];
    }

    /**
     * Sets gross_weight_unit
     *
     * @param float $gross_weight_unit gross weight of a single package in this package line
     *
     * @return $this
     */
    public function setGrossWeightUnit($gross_weight_unit)
    {
        $this->container['gross_weight_unit'] = $gross_weight_unit;

        return $this;
    }

    /**
     * Gets gross_weight_total
     *
     * @return float
     */
    public function getGrossWeightTotal()
    {
        return $this->container['gross_weight_total'];
    }

    /**
     * Sets gross_weight_total
     *
     * @param float $gross_weight_total gross weight of a all packages in this package line
     *
     * @return $this
     */
    public function setGrossWeightTotal($gross_weight_total)
    {
        $this->container['gross_weight_total'] = $gross_weight_total;

        return $this;
    }

    /**
     * Gets unit_loading_meter
     *
     * @return float
     */
    public function getUnitLoadingMeter()
    {
        return $this->container['unit_loading_meter'];
    }

    /**
     * Sets unit_loading_meter
     *
     * @param float $unit_loading_meter loading meter of a single package in this package line
     *
     * @return $this
     */
    public function setUnitLoadingMeter($unit_loading_meter)
    {
        $this->container['unit_loading_meter'] = $unit_loading_meter;

        return $this;
    }

    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode barcode for packages in this package line
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets adr
     *
     * @return bool
     */
    public function getAdr()
    {
        return $this->container['adr'];
    }

    /**
     * Sets adr
     *
     * @param bool $adr boolean for whether or not the packages in this package line should be considered as ADR
     *
     * @return $this
     */
    public function setAdr($adr)
    {
        $this->container['adr'] = $adr;

        return $this;
    }

    /**
     * Gets adr_class
     *
     * @return int
     */
    public function getAdrClass()
    {
        return $this->container['adr_class'];
    }

    /**
     * Sets adr_class
     *
     * @param int $adr_class ADR class of packages in package line
     *
     * @return $this
     */
    public function setAdrClass($adr_class)
    {
        $this->container['adr_class'] = $adr_class;

        return $this;
    }

    /**
     * Gets adr_un_nr
     *
     * @return int
     */
    public function getAdrUnNr()
    {
        return $this->container['adr_un_nr'];
    }

    /**
     * Sets adr_un_nr
     *
     * @param int $adr_un_nr ADR UN Nr of packages in package line
     *
     * @return $this
     */
    public function setAdrUnNr($adr_un_nr)
    {
        $this->container['adr_un_nr'] = $adr_un_nr;

        return $this;
    }

    /**
     * Gets temp
     *
     * @return bool
     */
    public function getTemp()
    {
        return $this->container['temp'];
    }

    /**
     * Sets temp
     *
     * @param bool $temp boolean for whether or not the packages in this package line should be considered as temperature dependent
     *
     * @return $this
     */
    public function setTemp($temp)
    {
        $this->container['temp'] = $temp;

        return $this;
    }

    /**
     * Gets temp_min
     *
     * @return float
     */
    public function getTempMin()
    {
        return $this->container['temp_min'];
    }

    /**
     * Sets temp_min
     *
     * @param float $temp_min minimum temperature for packages in package line
     *
     * @return $this
     */
    public function setTempMin($temp_min)
    {
        $this->container['temp_min'] = $temp_min;

        return $this;
    }

    /**
     * Gets temp_max
     *
     * @return float
     */
    public function getTempMax()
    {
        return $this->container['temp_max'];
    }

    /**
     * Sets temp_max
     *
     * @param float $temp_max maximum temperature for packages in package line
     *
     * @return $this
     */
    public function setTempMax($temp_max)
    {
        $this->container['temp_max'] = $temp_max;

        return $this;
    }

    /**
     * Gets capacity_volume
     *
     * @return float
     */
    public function getCapacityVolume()
    {
        return $this->container['capacity_volume'];
    }

    /**
     * Sets capacity_volume
     *
     * @param float $capacity_volume total volume for all packages in package line, used for any capacity related calculations
     *
     * @return $this
     */
    public function setCapacityVolume($capacity_volume)
    {
        $this->container['capacity_volume'] = $capacity_volume;

        return $this;
    }

    /**
     * Gets capacity_loading_meter
     *
     * @return float
     */
    public function getCapacityLoadingMeter()
    {
        return $this->container['capacity_loading_meter'];
    }

    /**
     * Sets capacity_loading_meter
     *
     * @param float $capacity_loading_meter total loading meter for all packages in package line, used for any capacity related calculations
     *
     * @return $this
     */
    public function setCapacityLoadingMeter($capacity_loading_meter)
    {
        $this->container['capacity_loading_meter'] = $capacity_loading_meter;

        return $this;
    }

    /**
     * Gets capacity_loading_weight
     *
     * @return float
     */
    public function getCapacityLoadingWeight()
    {
        return $this->container['capacity_loading_weight'];
    }

    /**
     * Sets capacity_loading_weight
     *
     * @param float $capacity_loading_weight total weight for all packages in package line, used for any capacity related calculations
     *
     * @return $this
     */
    public function setCapacityLoadingWeight($capacity_loading_weight)
    {
        $this->container['capacity_loading_weight'] = $capacity_loading_weight;

        return $this;
    }

    /**
     * Gets hs_code
     *
     * @return string
     */
    public function getHsCode()
    {
        return $this->container['hs_code'];
    }

    /**
     * Sets hs_code
     *
     * @param string $hs_code Harmonized System code for packages in this package line
     *
     * @return $this
     */
    public function setHsCode($hs_code)
    {
        $this->container['hs_code'] = $hs_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description of this package_line
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets activity_links
     *
     * @return \BumbalClient\BumbalClient\Model\LinkModel[]
     */
    public function getActivityLinks()
    {
        return $this->container['activity_links'];
    }

    /**
     * Sets activity_links
     *
     * @param \BumbalClient\BumbalClient\Model\LinkModel[] $activity_links links to activities connected to this package_line
     *
     * @return $this
     */
    public function setActivityLinks($activity_links)
    {
        $this->container['activity_links'] = $activity_links;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \BumbalClient\BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \BumbalClient\BumbalClient\Model\LinkModel[] $links 
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta_data
     *
     * @return \BumbalClient\BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     *
     * @param \BumbalClient\BumbalClient\Model\MetaDataModel[] $meta_data 
     *
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \BumbalClient\BumbalClient\Model\NoteModel[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \BumbalClient\BumbalClient\Model\NoteModel[] $notes 
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \BumbalClient\BumbalClient\Model\FileModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \BumbalClient\BumbalClient\Model\FileModel[] $files 
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at date time
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at date time
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

