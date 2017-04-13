<?php
/**
 * TimeSlotModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  BumbalClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal Client API
 *
 * Bumbal API documentation
 *
 * OpenAPI spec version: 2.0
 * Contact: gerb@bumbal.eu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Bumbal\Client\Model;

use \ArrayAccess;

/**
 * TimeSlotModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TimeSlotModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TimeSlotModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'activity_id' => 'int',
        'time_slot_type' => 'string',
        'date_from' => '\DateTime',
        'time_from' => 'string',
        'date_time_from' => '\DateTime',
        'date_to' => '\DateTime',
        'time_to' => 'string',
        'date_time_to' => '\DateTime',
        'duration' => 'int',
        'priority' => 'int'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'activity_id' => 'activity_id',
        'time_slot_type' => 'time_slot_type',
        'date_from' => 'date_from',
        'time_from' => 'time_from',
        'date_time_from' => 'date_time_from',
        'date_to' => 'date_to',
        'time_to' => 'time_to',
        'date_time_to' => 'date_time_to',
        'duration' => 'duration',
        'priority' => 'priority'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'activity_id' => 'setActivityId',
        'time_slot_type' => 'setTimeSlotType',
        'date_from' => 'setDateFrom',
        'time_from' => 'setTimeFrom',
        'date_time_from' => 'setDateTimeFrom',
        'date_to' => 'setDateTo',
        'time_to' => 'setTimeTo',
        'date_time_to' => 'setDateTimeTo',
        'duration' => 'setDuration',
        'priority' => 'setPriority'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'activity_id' => 'getActivityId',
        'time_slot_type' => 'getTimeSlotType',
        'date_from' => 'getDateFrom',
        'time_from' => 'getTimeFrom',
        'date_time_from' => 'getDateTimeFrom',
        'date_to' => 'getDateTo',
        'time_to' => 'getTimeTo',
        'date_time_to' => 'getDateTimeTo',
        'duration' => 'getDuration',
        'priority' => 'getPriority'
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

    const TIME_SLOT_TYPE_FIRST_ENTRY = 'first-entry';
    const TIME_SLOT_TYPE_PLANNED = 'planned';
    const TIME_SLOT_TYPE_ACTUAL = 'actual';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTimeSlotTypeAllowableValues()
    {
        return [
            self::TIME_SLOT_TYPE_FIRST_ENTRY,
            self::TIME_SLOT_TYPE_PLANNED,
            self::TIME_SLOT_TYPE_ACTUAL,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['activity_id'] = isset($data['activity_id']) ? $data['activity_id'] : null;
        $this->container['time_slot_type'] = isset($data['time_slot_type']) ? $data['time_slot_type'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['time_from'] = isset($data['time_from']) ? $data['time_from'] : null;
        $this->container['date_time_from'] = isset($data['date_time_from']) ? $data['date_time_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['time_to'] = isset($data['time_to']) ? $data['time_to'] : null;
        $this->container['date_time_to'] = isset($data['date_time_to']) ? $data['date_time_to'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['activity_id'] === null) {
            $invalid_properties[] = "'activity_id' can't be null";
        }
        if ($this->container['time_slot_type'] === null) {
            $invalid_properties[] = "'time_slot_type' can't be null";
        }
        $allowed_values = ["first-entry", "planned", "actual"];
        if (!in_array($this->container['time_slot_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'time_slot_type', must be one of 'first-entry', 'planned', 'actual'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['activity_id'] === null) {
            return false;
        }
        if ($this->container['time_slot_type'] === null) {
            return false;
        }
        $allowed_values = ["first-entry", "planned", "actual"];
        if (!in_array($this->container['time_slot_type'], $allowed_values)) {
            return false;
        }
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
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets activity_id
     * @return int
     */
    public function getActivityId()
    {
        return $this->container['activity_id'];
    }

    /**
     * Sets activity_id
     * @param int $activity_id Activity ID to which this TimeSlot belongs
     * @return $this
     */
    public function setActivityId($activity_id)
    {
        $this->container['activity_id'] = $activity_id;

        return $this;
    }

    /**
     * Gets time_slot_type
     * @return string
     */
    public function getTimeSlotType()
    {
        return $this->container['time_slot_type'];
    }

    /**
     * Sets time_slot_type
     * @param string $time_slot_type TimeSlot Type
     * @return $this
     */
    public function setTimeSlotType($time_slot_type)
    {
        $allowed_values = array('first-entry', 'planned', 'actual');
        if ((!in_array($time_slot_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'time_slot_type', must be one of 'first-entry', 'planned', 'actual'");
        }
        $this->container['time_slot_type'] = $time_slot_type;

        return $this;
    }

    /**
     * Gets date_from
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     * @param \DateTime $date_from
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets time_from
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->container['time_from'];
    }

    /**
     * Sets time_from
     * @param string $time_from
     * @return $this
     */
    public function setTimeFrom($time_from)
    {
        $this->container['time_from'] = $time_from;

        return $this;
    }

    /**
     * Gets date_time_from
     * @return \DateTime
     */
    public function getDateTimeFrom()
    {
        return $this->container['date_time_from'];
    }

    /**
     * Sets date_time_from
     * @param \DateTime $date_time_from
     * @return $this
     */
    public function setDateTimeFrom($date_time_from)
    {
        $this->container['date_time_from'] = $date_time_from;

        return $this;
    }

    /**
     * Gets date_to
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     * @param \DateTime $date_to
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets time_to
     * @return string
     */
    public function getTimeTo()
    {
        return $this->container['time_to'];
    }

    /**
     * Sets time_to
     * @param string $time_to
     * @return $this
     */
    public function setTimeTo($time_to)
    {
        $this->container['time_to'] = $time_to;

        return $this;
    }

    /**
     * Gets date_time_to
     * @return \DateTime
     */
    public function getDateTimeTo()
    {
        return $this->container['date_time_to'];
    }

    /**
     * Sets date_time_to
     * @param \DateTime $date_time_to
     * @return $this
     */
    public function setDateTimeTo($date_time_to)
    {
        $this->container['date_time_to'] = $date_time_to;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration Duration in minutes
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority Priority Level
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

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