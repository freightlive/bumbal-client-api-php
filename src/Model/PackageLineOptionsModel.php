<?php
/**
 * PackageLineOptionsModel
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
 * Bumbal Client Api
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

namespace BumbalClient\Model;

use \ArrayAccess;

/**
 * PackageLineOptionsModel Class Doc Comment
 *
 * @category    Class */
/**
 * @package     BumbalClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PackageLineOptionsModel implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PackageLineOptionsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_package_line_notes' => 'bool',
        'include_package_line_tags' => 'bool',
        'include_package_type_name' => 'bool',
        'include_package_line_references' => 'bool',
        'include_package_line_files_record_info' => 'bool',
        'include_package_line_record_info' => 'bool',
        'include_activity_ids' => 'bool',
        'include_package_line_meta_data' => 'bool',
        'include_package_line_meta_data_objects' => 'bool',
        'include_package_line_links' => 'bool',
        'include_package_lines_info' => 'bool',
        'include_package_line_files' => 'bool',
        'include_package_line_files_meta_data' => 'bool',
        'include_package_line_files_meta_data_objects' => 'bool'
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
        'include_package_line_notes' => 'include_package_line_notes',
        'include_package_line_tags' => 'include_package_line_tags',
        'include_package_type_name' => 'include_package_type_name',
        'include_package_line_references' => 'include_package_line_references',
        'include_package_line_files_record_info' => 'include_package_line_files_record_info',
        'include_package_line_record_info' => 'include_package_line_record_info',
        'include_activity_ids' => 'include_activity_ids',
        'include_package_line_meta_data' => 'include_package_line_meta_data',
        'include_package_line_meta_data_objects' => 'include_package_line_meta_data_objects',
        'include_package_line_links' => 'include_package_line_links',
        'include_package_lines_info' => 'include_package_lines_info',
        'include_package_line_files' => 'include_package_line_files',
        'include_package_line_files_meta_data' => 'include_package_line_files_meta_data',
        'include_package_line_files_meta_data_objects' => 'include_package_line_files_meta_data_objects'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'include_package_line_notes' => 'setIncludePackageLineNotes',
        'include_package_line_tags' => 'setIncludePackageLineTags',
        'include_package_type_name' => 'setIncludePackageTypeName',
        'include_package_line_references' => 'setIncludePackageLineReferences',
        'include_package_line_files_record_info' => 'setIncludePackageLineFilesRecordInfo',
        'include_package_line_record_info' => 'setIncludePackageLineRecordInfo',
        'include_activity_ids' => 'setIncludeActivityIds',
        'include_package_line_meta_data' => 'setIncludePackageLineMetaData',
        'include_package_line_meta_data_objects' => 'setIncludePackageLineMetaDataObjects',
        'include_package_line_links' => 'setIncludePackageLineLinks',
        'include_package_lines_info' => 'setIncludePackageLinesInfo',
        'include_package_line_files' => 'setIncludePackageLineFiles',
        'include_package_line_files_meta_data' => 'setIncludePackageLineFilesMetaData',
        'include_package_line_files_meta_data_objects' => 'setIncludePackageLineFilesMetaDataObjects'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'include_package_line_notes' => 'getIncludePackageLineNotes',
        'include_package_line_tags' => 'getIncludePackageLineTags',
        'include_package_type_name' => 'getIncludePackageTypeName',
        'include_package_line_references' => 'getIncludePackageLineReferences',
        'include_package_line_files_record_info' => 'getIncludePackageLineFilesRecordInfo',
        'include_package_line_record_info' => 'getIncludePackageLineRecordInfo',
        'include_activity_ids' => 'getIncludeActivityIds',
        'include_package_line_meta_data' => 'getIncludePackageLineMetaData',
        'include_package_line_meta_data_objects' => 'getIncludePackageLineMetaDataObjects',
        'include_package_line_links' => 'getIncludePackageLineLinks',
        'include_package_lines_info' => 'getIncludePackageLinesInfo',
        'include_package_line_files' => 'getIncludePackageLineFiles',
        'include_package_line_files_meta_data' => 'getIncludePackageLineFilesMetaData',
        'include_package_line_files_meta_data_objects' => 'getIncludePackageLineFilesMetaDataObjects'
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
        $this->container['include_package_line_notes'] = isset($data['include_package_line_notes']) ? $data['include_package_line_notes'] : null;
        $this->container['include_package_line_tags'] = isset($data['include_package_line_tags']) ? $data['include_package_line_tags'] : null;
        $this->container['include_package_type_name'] = isset($data['include_package_type_name']) ? $data['include_package_type_name'] : null;
        $this->container['include_package_line_references'] = isset($data['include_package_line_references']) ? $data['include_package_line_references'] : null;
        $this->container['include_package_line_files_record_info'] = isset($data['include_package_line_files_record_info']) ? $data['include_package_line_files_record_info'] : null;
        $this->container['include_package_line_record_info'] = isset($data['include_package_line_record_info']) ? $data['include_package_line_record_info'] : null;
        $this->container['include_activity_ids'] = isset($data['include_activity_ids']) ? $data['include_activity_ids'] : null;
        $this->container['include_package_line_meta_data'] = isset($data['include_package_line_meta_data']) ? $data['include_package_line_meta_data'] : null;
        $this->container['include_package_line_meta_data_objects'] = isset($data['include_package_line_meta_data_objects']) ? $data['include_package_line_meta_data_objects'] : null;
        $this->container['include_package_line_links'] = isset($data['include_package_line_links']) ? $data['include_package_line_links'] : null;
        $this->container['include_package_lines_info'] = isset($data['include_package_lines_info']) ? $data['include_package_lines_info'] : null;
        $this->container['include_package_line_files'] = isset($data['include_package_line_files']) ? $data['include_package_line_files'] : null;
        $this->container['include_package_line_files_meta_data'] = isset($data['include_package_line_files_meta_data']) ? $data['include_package_line_files_meta_data'] : null;
        $this->container['include_package_line_files_meta_data_objects'] = isset($data['include_package_line_files_meta_data_objects']) ? $data['include_package_line_files_meta_data_objects'] : null;
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
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets include_package_line_notes
     * @return bool
     */
    public function getIncludePackageLineNotes()
    {
        return $this->container['include_package_line_notes'];
    }

    /**
     * Sets include_package_line_notes
     * @param bool $include_package_line_notes
     * @return $this
     */
    public function setIncludePackageLineNotes($include_package_line_notes)
    {
        $this->container['include_package_line_notes'] = $include_package_line_notes;

        return $this;
    }

    /**
     * Gets include_package_line_tags
     * @return bool
     */
    public function getIncludePackageLineTags()
    {
        return $this->container['include_package_line_tags'];
    }

    /**
     * Sets include_package_line_tags
     * @param bool $include_package_line_tags
     * @return $this
     */
    public function setIncludePackageLineTags($include_package_line_tags)
    {
        $this->container['include_package_line_tags'] = $include_package_line_tags;

        return $this;
    }

    /**
     * Gets include_package_type_name
     * @return bool
     */
    public function getIncludePackageTypeName()
    {
        return $this->container['include_package_type_name'];
    }

    /**
     * Sets include_package_type_name
     * @param bool $include_package_type_name
     * @return $this
     */
    public function setIncludePackageTypeName($include_package_type_name)
    {
        $this->container['include_package_type_name'] = $include_package_type_name;

        return $this;
    }

    /**
     * Gets include_package_line_references
     * @return bool
     */
    public function getIncludePackageLineReferences()
    {
        return $this->container['include_package_line_references'];
    }

    /**
     * Sets include_package_line_references
     * @param bool $include_package_line_references
     * @return $this
     */
    public function setIncludePackageLineReferences($include_package_line_references)
    {
        $this->container['include_package_line_references'] = $include_package_line_references;

        return $this;
    }

    /**
     * Gets include_package_line_files_record_info
     * @return bool
     */
    public function getIncludePackageLineFilesRecordInfo()
    {
        return $this->container['include_package_line_files_record_info'];
    }

    /**
     * Sets include_package_line_files_record_info
     * @param bool $include_package_line_files_record_info
     * @return $this
     */
    public function setIncludePackageLineFilesRecordInfo($include_package_line_files_record_info)
    {
        $this->container['include_package_line_files_record_info'] = $include_package_line_files_record_info;

        return $this;
    }

    /**
     * Gets include_package_line_record_info
     * @return bool
     */
    public function getIncludePackageLineRecordInfo()
    {
        return $this->container['include_package_line_record_info'];
    }

    /**
     * Sets include_package_line_record_info
     * @param bool $include_package_line_record_info
     * @return $this
     */
    public function setIncludePackageLineRecordInfo($include_package_line_record_info)
    {
        $this->container['include_package_line_record_info'] = $include_package_line_record_info;

        return $this;
    }

    /**
     * Gets include_activity_ids
     * @return bool
     */
    public function getIncludeActivityIds()
    {
        return $this->container['include_activity_ids'];
    }

    /**
     * Sets include_activity_ids
     * @param bool $include_activity_ids
     * @return $this
     */
    public function setIncludeActivityIds($include_activity_ids)
    {
        $this->container['include_activity_ids'] = $include_activity_ids;

        return $this;
    }

    /**
     * Gets include_package_line_meta_data
     * @return bool
     */
    public function getIncludePackageLineMetaData()
    {
        return $this->container['include_package_line_meta_data'];
    }

    /**
     * Sets include_package_line_meta_data
     * @param bool $include_package_line_meta_data
     * @return $this
     */
    public function setIncludePackageLineMetaData($include_package_line_meta_data)
    {
        $this->container['include_package_line_meta_data'] = $include_package_line_meta_data;

        return $this;
    }

    /**
     * Gets include_package_line_meta_data_objects
     * @return bool
     */
    public function getIncludePackageLineMetaDataObjects()
    {
        return $this->container['include_package_line_meta_data_objects'];
    }

    /**
     * Sets include_package_line_meta_data_objects
     * @param bool $include_package_line_meta_data_objects
     * @return $this
     */
    public function setIncludePackageLineMetaDataObjects($include_package_line_meta_data_objects)
    {
        $this->container['include_package_line_meta_data_objects'] = $include_package_line_meta_data_objects;

        return $this;
    }

    /**
     * Gets include_package_line_links
     * @return bool
     */
    public function getIncludePackageLineLinks()
    {
        return $this->container['include_package_line_links'];
    }

    /**
     * Sets include_package_line_links
     * @param bool $include_package_line_links
     * @return $this
     */
    public function setIncludePackageLineLinks($include_package_line_links)
    {
        $this->container['include_package_line_links'] = $include_package_line_links;

        return $this;
    }

    /**
     * Gets include_package_lines_info
     * @return bool
     */
    public function getIncludePackageLinesInfo()
    {
        return $this->container['include_package_lines_info'];
    }

    /**
     * Sets include_package_lines_info
     * @param bool $include_package_lines_info
     * @return $this
     */
    public function setIncludePackageLinesInfo($include_package_lines_info)
    {
        $this->container['include_package_lines_info'] = $include_package_lines_info;

        return $this;
    }

    /**
     * Gets include_package_line_files
     * @return bool
     */
    public function getIncludePackageLineFiles()
    {
        return $this->container['include_package_line_files'];
    }

    /**
     * Sets include_package_line_files
     * @param bool $include_package_line_files
     * @return $this
     */
    public function setIncludePackageLineFiles($include_package_line_files)
    {
        $this->container['include_package_line_files'] = $include_package_line_files;

        return $this;
    }

    /**
     * Gets include_package_line_files_meta_data
     * @return bool
     */
    public function getIncludePackageLineFilesMetaData()
    {
        return $this->container['include_package_line_files_meta_data'];
    }

    /**
     * Sets include_package_line_files_meta_data
     * @param bool $include_package_line_files_meta_data
     * @return $this
     */
    public function setIncludePackageLineFilesMetaData($include_package_line_files_meta_data)
    {
        $this->container['include_package_line_files_meta_data'] = $include_package_line_files_meta_data;

        return $this;
    }

    /**
     * Gets include_package_line_files_meta_data_objects
     * @return bool
     */
    public function getIncludePackageLineFilesMetaDataObjects()
    {
        return $this->container['include_package_line_files_meta_data_objects'];
    }

    /**
     * Sets include_package_line_files_meta_data_objects
     * @param bool $include_package_line_files_meta_data_objects
     * @return $this
     */
    public function setIncludePackageLineFilesMetaDataObjects($include_package_line_files_meta_data_objects)
    {
        $this->container['include_package_line_files_meta_data_objects'] = $include_package_line_files_meta_data_objects;

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