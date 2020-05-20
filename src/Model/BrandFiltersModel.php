<?php
/**
 * BrandFiltersModel
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
 * BrandFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BrandFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BrandFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'updated_at_since' => '\DateTime',
        'updated_at_till' => '\DateTime',
        'name' => 'string[]',
        'portal_name' => 'string[]',
        'links' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'updated_at_since' => 'date-time',
        'updated_at_till' => 'date-time',
        'name' => null,
        'portal_name' => null,
        'links' => null
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
        'updated_at_since' => 'updated_at_since',
        'updated_at_till' => 'updated_at_till',
        'name' => 'name',
        'portal_name' => 'portal_name',
        'links' => 'links'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'updated_at_since' => 'setUpdatedAtSince',
        'updated_at_till' => 'setUpdatedAtTill',
        'name' => 'setName',
        'portal_name' => 'setPortalName',
        'links' => 'setLinks'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'updated_at_since' => 'getUpdatedAtSince',
        'updated_at_till' => 'getUpdatedAtTill',
        'name' => 'getName',
        'portal_name' => 'getPortalName',
        'links' => 'getLinks'
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
        $this->container['updated_at_since'] = isset($data['updated_at_since']) ? $data['updated_at_since'] : null;
        $this->container['updated_at_till'] = isset($data['updated_at_till']) ? $data['updated_at_till'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['portal_name'] = isset($data['portal_name']) ? $data['portal_name'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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
     * Gets updated_at_since
     * @return \DateTime
     */
    public function getUpdatedAtSince()
    {
        return $this->container['updated_at_since'];
    }

    /**
     * Sets updated_at_since
     * @param \DateTime $updated_at_since Show updated since
     * @return $this
     */
    public function setUpdatedAtSince($updated_at_since)
    {
        $this->container['updated_at_since'] = $updated_at_since;

        return $this;
    }

    /**
     * Gets updated_at_till
     * @return \DateTime
     */
    public function getUpdatedAtTill()
    {
        return $this->container['updated_at_till'];
    }

    /**
     * Sets updated_at_till
     * @param \DateTime $updated_at_till Show updated till
     * @return $this
     */
    public function setUpdatedAtTill($updated_at_till)
    {
        $this->container['updated_at_till'] = $updated_at_till;

        return $this;
    }

    /**
     * Gets name
     * @return string[]
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string[] $name Brand name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets portal_name
     * @return string[]
     */
    public function getPortalName()
    {
        return $this->container['portal_name'];
    }

    /**
     * Sets portal_name
     * @param string[] $portal_name When getting the portal settings for a brand: the portal name
     * @return $this
     */
    public function setPortalName($portal_name)
    {
        $this->container['portal_name'] = $portal_name;

        return $this;
    }

    /**
     * Gets links
     * @return object[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param object[] $links Activity Link ids
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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


