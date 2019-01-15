<?php
/**
 * ZoneModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   Swaagger Codegen team
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * ZoneModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ZoneModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ZoneModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'filter_tag_names' => 'string[]',
        'filter_tags' => 'object',
        'links' => '\BumbalClient\Model\LinkModel[]',
        'meta_data' => '\BumbalClient\Model\MetaDataModel[]',
        'zone_ranges' => '\BumbalClient\Model\ZoneRangeModel[]',
        'zone_created_at' => '\DateTime',
        'zone_updated_at' => '\DateTime',
        'zone_created_by' => 'int',
        'zone_updated_by' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'filter_tag_names' => null,
        'filter_tags' => null,
        'links' => null,
        'meta_data' => null,
        'zone_ranges' => null,
        'zone_created_at' => 'date-time',
        'zone_updated_at' => 'date-time',
        'zone_created_by' => null,
        'zone_updated_by' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'filter_tag_names' => 'filter_tag_names',
        'filter_tags' => 'filter_tags',
        'links' => 'links',
        'meta_data' => 'meta_data',
        'zone_ranges' => 'zone_ranges',
        'zone_created_at' => 'zone_created_at',
        'zone_updated_at' => 'zone_updated_at',
        'zone_created_by' => 'zone_created_by',
        'zone_updated_by' => 'zone_updated_by'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'filter_tag_names' => 'setFilterTagNames',
        'filter_tags' => 'setFilterTags',
        'links' => 'setLinks',
        'meta_data' => 'setMetaData',
        'zone_ranges' => 'setZoneRanges',
        'zone_created_at' => 'setZoneCreatedAt',
        'zone_updated_at' => 'setZoneUpdatedAt',
        'zone_created_by' => 'setZoneCreatedBy',
        'zone_updated_by' => 'setZoneUpdatedBy'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'filter_tag_names' => 'getFilterTagNames',
        'filter_tags' => 'getFilterTags',
        'links' => 'getLinks',
        'meta_data' => 'getMetaData',
        'zone_ranges' => 'getZoneRanges',
        'zone_created_at' => 'getZoneCreatedAt',
        'zone_updated_at' => 'getZoneUpdatedAt',
        'zone_created_by' => 'getZoneCreatedBy',
        'zone_updated_by' => 'getZoneUpdatedBy'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['filter_tag_names'] = isset($data['filter_tag_names']) ? $data['filter_tag_names'] : null;
        $this->container['filter_tags'] = isset($data['filter_tags']) ? $data['filter_tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['meta_data'] = isset($data['meta_data']) ? $data['meta_data'] : null;
        $this->container['zone_ranges'] = isset($data['zone_ranges']) ? $data['zone_ranges'] : null;
        $this->container['zone_created_at'] = isset($data['zone_created_at']) ? $data['zone_created_at'] : null;
        $this->container['zone_updated_at'] = isset($data['zone_updated_at']) ? $data['zone_updated_at'] : null;
        $this->container['zone_created_by'] = isset($data['zone_created_by']) ? $data['zone_created_by'] : null;
        $this->container['zone_updated_by'] = isset($data['zone_updated_by']) ? $data['zone_updated_by'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Unique ID
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Zone Name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets filter_tag_names
     * @return string[]
     */
    public function getFilterTagNames()
    {
        return $this->container['filter_tag_names'];
    }

    /**
     * Sets filter_tag_names
     * @param string[] $filter_tag_names Tag names
     * @return $this
     */
    public function setFilterTagNames($filter_tag_names)
    {
        $this->container['filter_tag_names'] = $filter_tag_names;

        return $this;
    }

    /**
     * Gets filter_tags
     * @return object
     */
    public function getFilterTags()
    {
        return $this->container['filter_tags'];
    }

    /**
     * Sets filter_tags
     * @param object $filter_tags
     * @return $this
     */
    public function setFilterTags($filter_tags)
    {
        $this->container['filter_tags'] = $filter_tags;

        return $this;
    }

    /**
     * Gets links
     * @return \BumbalClient\Model\LinkModel[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \BumbalClient\Model\LinkModel[] $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets meta_data
     * @return \BumbalClient\Model\MetaDataModel[]
     */
    public function getMetaData()
    {
        return $this->container['meta_data'];
    }

    /**
     * Sets meta_data
     * @param \BumbalClient\Model\MetaDataModel[] $meta_data
     * @return $this
     */
    public function setMetaData($meta_data)
    {
        $this->container['meta_data'] = $meta_data;

        return $this;
    }

    /**
     * Gets zone_ranges
     * @return \BumbalClient\Model\ZoneRangeModel[]
     */
    public function getZoneRanges()
    {
        return $this->container['zone_ranges'];
    }

    /**
     * Sets zone_ranges
     * @param \BumbalClient\Model\ZoneRangeModel[] $zone_ranges
     * @return $this
     */
    public function setZoneRanges($zone_ranges)
    {
        $this->container['zone_ranges'] = $zone_ranges;

        return $this;
    }

    /**
     * Gets zone_created_at
     * @return \DateTime
     */
    public function getZoneCreatedAt()
    {
        return $this->container['zone_created_at'];
    }

    /**
     * Sets zone_created_at
     * @param \DateTime $zone_created_at created_at date time
     * @return $this
     */
    public function setZoneCreatedAt($zone_created_at)
    {
        $this->container['zone_created_at'] = $zone_created_at;

        return $this;
    }

    /**
     * Gets zone_updated_at
     * @return \DateTime
     */
    public function getZoneUpdatedAt()
    {
        return $this->container['zone_updated_at'];
    }

    /**
     * Sets zone_updated_at
     * @param \DateTime $zone_updated_at updated_at date time
     * @return $this
     */
    public function setZoneUpdatedAt($zone_updated_at)
    {
        $this->container['zone_updated_at'] = $zone_updated_at;

        return $this;
    }

    /**
     * Gets zone_created_by
     * @return int
     */
    public function getZoneCreatedBy()
    {
        return $this->container['zone_created_by'];
    }

    /**
     * Sets zone_created_by
     * @param int $zone_created_by created_by user id
     * @return $this
     */
    public function setZoneCreatedBy($zone_created_by)
    {
        $this->container['zone_created_by'] = $zone_created_by;

        return $this;
    }

    /**
     * Gets zone_updated_by
     * @return int
     */
    public function getZoneUpdatedBy()
    {
        return $this->container['zone_updated_by'];
    }

    /**
     * Sets zone_updated_by
     * @param int $zone_updated_by created_by user id
     * @return $this
     */
    public function setZoneUpdatedBy($zone_updated_by)
    {
        $this->container['zone_updated_by'] = $zone_updated_by;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\BumbalClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


