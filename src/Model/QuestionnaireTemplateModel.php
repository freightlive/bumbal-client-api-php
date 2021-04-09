<?php
/**
 * QuestionnaireTemplateModel
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
 * QuestionnaireTemplateModel Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QuestionnaireTemplateModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QuestionnaireTemplateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'active' => 'bool',
        'brands' => '\BumbalClient\Model\BrandModel[]',
        'brand_ids' => 'int[]',
        'brand_names' => 'string[]',
        'zones' => '\BumbalClient\Model\ZoneModel[]',
        'zone_ids' => 'int[]',
        'zone_names' => 'string[]',
        'tags' => '\BumbalClient\Model\TagModel[]',
        'tag_ids' => 'int[]',
        'tag_names' => 'string[]',
        'name' => 'string',
        'questionnaire_type_id' => 'int',
        'questionnaire_type_name' => 'string',
        'no_tags' => 'bool',
        'no_zones' => 'bool',
        'questions' => '\BumbalClient\Model\QuestionnaireTemplateQuestionModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'active' => null,
        'brands' => null,
        'brand_ids' => null,
        'brand_names' => null,
        'zones' => null,
        'zone_ids' => null,
        'zone_names' => null,
        'tags' => null,
        'tag_ids' => null,
        'tag_names' => null,
        'name' => 'string',
        'questionnaire_type_id' => 'int64',
        'questionnaire_type_name' => 'string',
        'no_tags' => null,
        'no_zones' => null,
        'questions' => null
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
        'active' => 'active',
        'brands' => 'brands',
        'brand_ids' => 'brand_ids',
        'brand_names' => 'brand_names',
        'zones' => 'zones',
        'zone_ids' => 'zone_ids',
        'zone_names' => 'zone_names',
        'tags' => 'tags',
        'tag_ids' => 'tag_ids',
        'tag_names' => 'tag_names',
        'name' => 'name',
        'questionnaire_type_id' => 'questionnaire_type_id',
        'questionnaire_type_name' => 'questionnaire_type_name',
        'no_tags' => 'no_tags',
        'no_zones' => 'no_zones',
        'questions' => 'questions'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'active' => 'setActive',
        'brands' => 'setBrands',
        'brand_ids' => 'setBrandIds',
        'brand_names' => 'setBrandNames',
        'zones' => 'setZones',
        'zone_ids' => 'setZoneIds',
        'zone_names' => 'setZoneNames',
        'tags' => 'setTags',
        'tag_ids' => 'setTagIds',
        'tag_names' => 'setTagNames',
        'name' => 'setName',
        'questionnaire_type_id' => 'setQuestionnaireTypeId',
        'questionnaire_type_name' => 'setQuestionnaireTypeName',
        'no_tags' => 'setNoTags',
        'no_zones' => 'setNoZones',
        'questions' => 'setQuestions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'active' => 'getActive',
        'brands' => 'getBrands',
        'brand_ids' => 'getBrandIds',
        'brand_names' => 'getBrandNames',
        'zones' => 'getZones',
        'zone_ids' => 'getZoneIds',
        'zone_names' => 'getZoneNames',
        'tags' => 'getTags',
        'tag_ids' => 'getTagIds',
        'tag_names' => 'getTagNames',
        'name' => 'getName',
        'questionnaire_type_id' => 'getQuestionnaireTypeId',
        'questionnaire_type_name' => 'getQuestionnaireTypeName',
        'no_tags' => 'getNoTags',
        'no_zones' => 'getNoZones',
        'questions' => 'getQuestions'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['brands'] = isset($data['brands']) ? $data['brands'] : null;
        $this->container['brand_ids'] = isset($data['brand_ids']) ? $data['brand_ids'] : null;
        $this->container['brand_names'] = isset($data['brand_names']) ? $data['brand_names'] : null;
        $this->container['zones'] = isset($data['zones']) ? $data['zones'] : null;
        $this->container['zone_ids'] = isset($data['zone_ids']) ? $data['zone_ids'] : null;
        $this->container['zone_names'] = isset($data['zone_names']) ? $data['zone_names'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['tag_names'] = isset($data['tag_names']) ? $data['tag_names'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['questionnaire_type_id'] = isset($data['questionnaire_type_id']) ? $data['questionnaire_type_id'] : null;
        $this->container['questionnaire_type_name'] = isset($data['questionnaire_type_name']) ? $data['questionnaire_type_name'] : null;
        $this->container['no_tags'] = isset($data['no_tags']) ? $data['no_tags'] : null;
        $this->container['no_zones'] = isset($data['no_zones']) ? $data['no_zones'] : null;
        $this->container['questions'] = isset($data['questions']) ? $data['questions'] : null;
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
     * @param int $id Unique Identifier
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active if active=0: QuestionnaireTemplate has been removed and is no longer visible in any bumbal interface
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets brands
     * @return \BumbalClient\Model\BrandModel[]
     */
    public function getBrands()
    {
        return $this->container['brands'];
    }

    /**
     * Sets brands
     * @param \BumbalClient\Model\BrandModel[] $brands
     * @return $this
     */
    public function setBrands($brands)
    {
        $this->container['brands'] = $brands;

        return $this;
    }

    /**
     * Gets brand_ids
     * @return int[]
     */
    public function getBrandIds()
    {
        return $this->container['brand_ids'];
    }

    /**
     * Sets brand_ids
     * @param int[] $brand_ids Brand ids
     * @return $this
     */
    public function setBrandIds($brand_ids)
    {
        $this->container['brand_ids'] = $brand_ids;

        return $this;
    }

    /**
     * Gets brand_names
     * @return string[]
     */
    public function getBrandNames()
    {
        return $this->container['brand_names'];
    }

    /**
     * Sets brand_names
     * @param string[] $brand_names Brand names
     * @return $this
     */
    public function setBrandNames($brand_names)
    {
        $this->container['brand_names'] = $brand_names;

        return $this;
    }

    /**
     * Gets zones
     * @return \BumbalClient\Model\ZoneModel[]
     */
    public function getZones()
    {
        return $this->container['zones'];
    }

    /**
     * Sets zones
     * @param \BumbalClient\Model\ZoneModel[] $zones
     * @return $this
     */
    public function setZones($zones)
    {
        $this->container['zones'] = $zones;

        return $this;
    }

    /**
     * Gets zone_ids
     * @return int[]
     */
    public function getZoneIds()
    {
        return $this->container['zone_ids'];
    }

    /**
     * Sets zone_ids
     * @param int[] $zone_ids Zone ids
     * @return $this
     */
    public function setZoneIds($zone_ids)
    {
        $this->container['zone_ids'] = $zone_ids;

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
     * Gets tags
     * @return \BumbalClient\Model\TagModel[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param \BumbalClient\Model\TagModel[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets tag_ids
     * @return int[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     * @param int[] $tag_ids Tag ids
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

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
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Name of the questionnaire template
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets questionnaire_type_id
     * @return int
     */
    public function getQuestionnaireTypeId()
    {
        return $this->container['questionnaire_type_id'];
    }

    /**
     * Sets questionnaire_type_id
     * @param int $questionnaire_type_id Questionnaire type id
     * @return $this
     */
    public function setQuestionnaireTypeId($questionnaire_type_id)
    {
        $this->container['questionnaire_type_id'] = $questionnaire_type_id;

        return $this;
    }

    /**
     * Gets questionnaire_type_name
     * @return string
     */
    public function getQuestionnaireTypeName()
    {
        return $this->container['questionnaire_type_name'];
    }

    /**
     * Sets questionnaire_type_name
     * @param string $questionnaire_type_name Name of the questionnaire type
     * @return $this
     */
    public function setQuestionnaireTypeName($questionnaire_type_name)
    {
        $this->container['questionnaire_type_name'] = $questionnaire_type_name;

        return $this;
    }

    /**
     * Gets no_tags
     * @return bool
     */
    public function getNoTags()
    {
        return $this->container['no_tags'];
    }

    /**
     * Sets no_tags
     * @param bool $no_tags if no_tags=1: no tags are used for matching
     * @return $this
     */
    public function setNoTags($no_tags)
    {
        $this->container['no_tags'] = $no_tags;

        return $this;
    }

    /**
     * Gets no_zones
     * @return bool
     */
    public function getNoZones()
    {
        return $this->container['no_zones'];
    }

    /**
     * Sets no_zones
     * @param bool $no_zones if no_zones=1: no zones are used for matching
     * @return $this
     */
    public function setNoZones($no_zones)
    {
        $this->container['no_zones'] = $no_zones;

        return $this;
    }

    /**
     * Gets questions
     * @return \BumbalClient\Model\QuestionnaireTemplateQuestionModel[]
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
     * @param \BumbalClient\Model\QuestionnaireTemplateQuestionModel[] $questions
     * @return $this
     */
    public function setQuestions($questions)
    {
        $this->container['questions'] = $questions;

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


