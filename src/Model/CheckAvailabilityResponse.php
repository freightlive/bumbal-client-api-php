<?php
/**
 * CheckAvailabilityResponse
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
 * CheckAvailabilityResponse Class Doc Comment
 *
 * @category    Class
 * @package     BumbalClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CheckAvailabilityResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CheckAvailabilityResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'token' => 'string',
        'status' => 'string',
        'available_timewindows' => '\BumbalClient\Model\TimeSlotModel[]',
        'unavailable_timewindows' => '\BumbalClient\Model\TimeSlotModel[]',
        'latest_analyzed_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'token' => null,
        'status' => null,
        'available_timewindows' => null,
        'unavailable_timewindows' => null,
        'latest_analyzed_date' => 'date'
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
        'token' => 'token',
        'status' => 'status',
        'available_timewindows' => 'available_timewindows',
        'unavailable_timewindows' => 'unavailable_timewindows',
        'latest_analyzed_date' => 'latest_analyzed_date'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'token' => 'setToken',
        'status' => 'setStatus',
        'available_timewindows' => 'setAvailableTimewindows',
        'unavailable_timewindows' => 'setUnavailableTimewindows',
        'latest_analyzed_date' => 'setLatestAnalyzedDate'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'token' => 'getToken',
        'status' => 'getStatus',
        'available_timewindows' => 'getAvailableTimewindows',
        'unavailable_timewindows' => 'getUnavailableTimewindows',
        'latest_analyzed_date' => 'getLatestAnalyzedDate'
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

    const STATUS_NOT_READY = 'not_ready';
    const STATUS_DONE = 'done';
    const STATUS_CANCELLED = 'cancelled';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_READY,
            self::STATUS_DONE,
            self::STATUS_CANCELLED,
        ];
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
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['available_timewindows'] = isset($data['available_timewindows']) ? $data['available_timewindows'] : null;
        $this->container['unavailable_timewindows'] = isset($data['unavailable_timewindows']) ? $data['unavailable_timewindows'] : null;
        $this->container['latest_analyzed_date'] = isset($data['latest_analyzed_date']) ? $data['latest_analyzed_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

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

        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets token
     * @return string
     */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
     * Sets token
     * @param string $token token for the check availability job
     * @return $this
     */
    public function setToken($token)
    {
        $this->container['token'] = $token;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status current status for request
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets available_timewindows
     * @return \BumbalClient\Model\TimeSlotModel[]
     */
    public function getAvailableTimewindows()
    {
        return $this->container['available_timewindows'];
    }

    /**
     * Sets available_timewindows
     * @param \BumbalClient\Model\TimeSlotModel[] $available_timewindows 
     * @return $this
     */
    public function setAvailableTimewindows($available_timewindows)
    {
        $this->container['available_timewindows'] = $available_timewindows;

        return $this;
    }

    /**
     * Gets unavailable_timewindows
     * @return \BumbalClient\Model\TimeSlotModel[]
     */
    public function getUnavailableTimewindows()
    {
        return $this->container['unavailable_timewindows'];
    }

    /**
     * Sets unavailable_timewindows
     * @param \BumbalClient\Model\TimeSlotModel[] $unavailable_timewindows 
     * @return $this
     */
    public function setUnavailableTimewindows($unavailable_timewindows)
    {
        $this->container['unavailable_timewindows'] = $unavailable_timewindows;

        return $this;
    }

    /**
     * Gets latest_analyzed_date
     * @return \DateTime
     */
    public function getLatestAnalyzedDate()
    {
        return $this->container['latest_analyzed_date'];
    }

    /**
     * Sets latest_analyzed_date
     * @param \DateTime $latest_analyzed_date 
     * @return $this
     */
    public function setLatestAnalyzedDate($latest_analyzed_date)
    {
        $this->container['latest_analyzed_date'] = $latest_analyzed_date;

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

