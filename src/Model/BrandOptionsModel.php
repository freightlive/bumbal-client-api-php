<?php
/**
 * BrandOptionsModel
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
 * BrandOptionsModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class BrandOptionsModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BrandOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_tags' => 'bool',
        'include_brand_colours' => 'bool',
        'include_links' => 'bool',
        'include_record_info' => 'bool',
        'include_files' => 'bool',
        'include_meta_data' => 'bool',
        'include_notes' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_tags' => null,
        'include_brand_colours' => null,
        'include_links' => null,
        'include_record_info' => null,
        'include_files' => null,
        'include_meta_data' => null,
        'include_notes' => null
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
        'include_tags' => 'include_tags',
        'include_brand_colours' => 'include_brand_colours',
        'include_links' => 'include_links',
        'include_record_info' => 'include_record_info',
        'include_files' => 'include_files',
        'include_meta_data' => 'include_meta_data',
        'include_notes' => 'include_notes'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_tags' => 'setIncludeTags',
        'include_brand_colours' => 'setIncludeBrandColours',
        'include_links' => 'setIncludeLinks',
        'include_record_info' => 'setIncludeRecordInfo',
        'include_files' => 'setIncludeFiles',
        'include_meta_data' => 'setIncludeMetaData',
        'include_notes' => 'setIncludeNotes'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_tags' => 'getIncludeTags',
        'include_brand_colours' => 'getIncludeBrandColours',
        'include_links' => 'getIncludeLinks',
        'include_record_info' => 'getIncludeRecordInfo',
        'include_files' => 'getIncludeFiles',
        'include_meta_data' => 'getIncludeMetaData',
        'include_notes' => 'getIncludeNotes'
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
        $this->container['include_tags'] = isset($data['include_tags']) ? $data['include_tags'] : null;
        $this->container['include_brand_colours'] = isset($data['include_brand_colours']) ? $data['include_brand_colours'] : null;
        $this->container['include_links'] = isset($data['include_links']) ? $data['include_links'] : null;
        $this->container['include_record_info'] = isset($data['include_record_info']) ? $data['include_record_info'] : null;
        $this->container['include_files'] = isset($data['include_files']) ? $data['include_files'] : null;
        $this->container['include_meta_data'] = isset($data['include_meta_data']) ? $data['include_meta_data'] : null;
        $this->container['include_notes'] = isset($data['include_notes']) ? $data['include_notes'] : null;
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
     * Gets include_tags
     * @return bool
     */
    public function getIncludeTags()
    {
        return $this->container['include_tags'];
    }

    /**
     * Sets include_tags
     * @param bool $include_tags
     * @return $this
     */
    public function setIncludeTags($include_tags)
    {
        $this->container['include_tags'] = $include_tags;

        return $this;
    }

    /**
     * Gets include_brand_colours
     * @return bool
     */
    public function getIncludeBrandColours()
    {
        return $this->container['include_brand_colours'];
    }

    /**
     * Sets include_brand_colours
     * @param bool $include_brand_colours
     * @return $this
     */
    public function setIncludeBrandColours($include_brand_colours)
    {
        $this->container['include_brand_colours'] = $include_brand_colours;

        return $this;
    }

    /**
     * Gets include_links
     * @return bool
     */
    public function getIncludeLinks()
    {
        return $this->container['include_links'];
    }

    /**
     * Sets include_links
     * @param bool $include_links
     * @return $this
     */
    public function setIncludeLinks($include_links)
    {
        $this->container['include_links'] = $include_links;

        return $this;
    }

    /**
     * Gets include_record_info
     * @return bool
     */
    public function getIncludeRecordInfo()
    {
        return $this->container['include_record_info'];
    }

    /**
     * Sets include_record_info
     * @param bool $include_record_info
     * @return $this
     */
    public function setIncludeRecordInfo($include_record_info)
    {
        $this->container['include_record_info'] = $include_record_info;

        return $this;
    }

    /**
     * Gets include_files
     * @return bool
     */
    public function getIncludeFiles()
    {
        return $this->container['include_files'];
    }

    /**
     * Sets include_files
     * @param bool $include_files
     * @return $this
     */
    public function setIncludeFiles($include_files)
    {
        $this->container['include_files'] = $include_files;

        return $this;
    }

    /**
     * Gets include_meta_data
     * @return bool
     */
    public function getIncludeMetaData()
    {
        return $this->container['include_meta_data'];
    }

    /**
     * Sets include_meta_data
     * @param bool $include_meta_data
     * @return $this
     */
    public function setIncludeMetaData($include_meta_data)
    {
        $this->container['include_meta_data'] = $include_meta_data;

        return $this;
    }

    /**
     * Gets include_notes
     * @return bool
     */
    public function getIncludeNotes()
    {
        return $this->container['include_notes'];
    }

    /**
     * Sets include_notes
     * @param bool $include_notes
     * @return $this
     */
    public function setIncludeNotes($include_notes)
    {
        $this->container['include_notes'] = $include_notes;

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

