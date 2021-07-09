<?php
/**
 * QuestionnaireTemplateFiltersModel
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
 * QuestionnaireTemplateFiltersModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuestionnaireTemplateFiltersModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QuestionnaireTemplateFiltersModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int[]',
        'tag_names' => 'string[]',
        'zone_names' => 'string[]',
        'link' => 'object[]',
        'links' => 'object[]',
        'search_text' => 'string',
        'zone_id' => 'int',
        'brand_id' => 'int',
        'updated_at_since' => '\DateTime',
        'updated_at_till' => '\DateTime',
        'questionnaire_type_name' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'tag_names' => null,
        'zone_names' => null,
        'link' => null,
        'links' => null,
        'search_text' => null,
        'zone_id' => null,
        'brand_id' => null,
        'updated_at_since' => 'date-time',
        'updated_at_till' => 'date-time',
        'questionnaire_type_name' => null
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
        'tag_names' => 'tag_names',
        'zone_names' => 'zone_names',
        'link' => 'link',
        'links' => 'links',
        'search_text' => 'search_text',
        'zone_id' => 'zone_id',
        'brand_id' => 'brand_id',
        'updated_at_since' => 'updated_at_since',
        'updated_at_till' => 'updated_at_till',
        'questionnaire_type_name' => 'questionnaire_type_name'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'tag_names' => 'setTagNames',
        'zone_names' => 'setZoneNames',
        'link' => 'setLink',
        'links' => 'setLinks',
        'search_text' => 'setSearchText',
        'zone_id' => 'setZoneId',
        'brand_id' => 'setBrandId',
        'updated_at_since' => 'setUpdatedAtSince',
        'updated_at_till' => 'setUpdatedAtTill',
        'questionnaire_type_name' => 'setQuestionnaireTypeName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'tag_names' => 'getTagNames',
        'zone_names' => 'getZoneNames',
        'link' => 'getLink',
        'links' => 'getLinks',
        'search_text' => 'getSearchText',
        'zone_id' => 'getZoneId',
        'brand_id' => 'getBrandId',
        'updated_at_since' => 'getUpdatedAtSince',
        'updated_at_till' => 'getUpdatedAtTill',
        'questionnaire_type_name' => 'getQuestionnaireTypeName'
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
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['zone_names'] = isset($data['zone_names']) ? $data['zone_names'] : null;
        $this->container['link'] = isset($data['link']) ? $data['link'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['search_text'] = isset($data['search_text']) ? $data['search_text'] : null;
        $this->container['zone_id'] = isset($data['zone_id']) ? $data['zone_id'] : null;
        $this->container['brand_id'] = isset($data['brand_id']) ? $data['brand_id'] : null;
        $this->container['updated_at_since'] = isset($data['updated_at_since']) ? $data['updated_at_since'] : null;
        $this->container['updated_at_till'] = isset($data['updated_at_till']) ? $data['updated_at_till'] : null;
        $this->container['questionnaire_type_name'] = isset($data['questionnaire_type_name']) ? $data['questionnaire_type_name'] : null;
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
     * @return int[]
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int[] $id QuestionnaireTemplate id's
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tag_names
     * @return string[]
     */
    public function getTagNames()
    {
        return $this->container['tag_names'];
    }

    /**
     * Sets tag_names
     * @param string[] $tag_names Tag names
     * @return $this
     */
    public function setTagNames($tag_names)
    {
        $this->container['tag_names'] = $tag_names;

        return $this;
    }

    /**
     * Gets zone_names
     * @return string[]
     */
    public function getZoneNames()
    {
        return $this->container['zone_names'];
    }

    /**
     * Sets zone_names
     * @param string[] $zone_names Zone names
     * @return $this
     */
    public function setZoneNames($zone_names)
    {
        $this->container['zone_names'] = $zone_names;

        return $this;
    }

    /**
     * Gets link
     * @return object[]
     */
    public function getLink()
    {
        return $this->container['link'];
    }

    /**
     * Sets link
     * @param object[] $link Activity Link ids
     * @return $this
     */
    public function setLink($link)
    {
        $this->container['link'] = $link;

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
     * Gets search_text
     * @return string
     */
    public function getSearchText()
    {
        return $this->container['search_text'];
    }

    /**
     * Sets search_text
     * @param string $search_text free search through text and numeric type columns
     * @return $this
     */
    public function setSearchText($search_text)
    {
        $this->container['search_text'] = $search_text;

        return $this;
    }

    /**
     * Gets zone_id
     * @return int
     */
    public function getZoneId()
    {
        return $this->container['zone_id'];
    }

    /**
     * Sets zone_id
     * @param int $zone_id Zone ID
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        $this->container['zone_id'] = $zone_id;

        return $this;
    }

    /**
     * Gets brand_id
     * @return int
     */
    public function getBrandId()
    {
        return $this->container['brand_id'];
    }

    /**
     * Sets brand_id
     * @param int $brand_id Brand ID
     * @return $this
     */
    public function setBrandId($brand_id)
    {
        $this->container['brand_id'] = $brand_id;

        return $this;
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
     * Gets questionnaire_type_name
     * @return object
     */
    public function getQuestionnaireTypeName()
    {
        return $this->container['questionnaire_type_name'];
    }

    /**
     * Sets questionnaire_type_name
     * @param object $questionnaire_type_name Questionnaire type name
     * @return $this
     */
    public function setQuestionnaireTypeName($questionnaire_type_name)
    {
        $this->container['questionnaire_type_name'] = $questionnaire_type_name;

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

