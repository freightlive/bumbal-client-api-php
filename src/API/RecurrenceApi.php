<?php
/**
 * RecurrenceApi
 * PHP version 5
 *
 * @category Class
 * @package  Bumbal\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bumbal API v2
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

namespace Bumbal\Client\API;

use \Bumbal\Client\ApiClient;
use \Bumbal\Client\ApiException;
use \Bumbal\Client\Configuration;
use \Bumbal\Client\ObjectSerializer;

/**
 * RecurrenceApi Class Doc Comment
 *
 * @category Class
 * @package  Bumbal\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RecurrenceApi
{
    /**
     * API Client
     *
     * @var \Bumbal\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Bumbal\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Bumbal\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://localhost/api/v2');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Bumbal\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Bumbal\Client\ApiClient $apiClient set the API client
     *
     * @return RecurrenceApi
     */
    public function setApiClient(\Bumbal\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteRecurrence
     *
     * Delete an Recurrence
     *
     * @param int $recurrence_id ID of recurrence to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function deleteRecurrence($recurrence_id)
    {
        list($response) = $this->deleteRecurrenceWithHttpInfo($recurrence_id);
        return $response;
    }

    /**
     * Operation deleteRecurrenceWithHttpInfo
     *
     * Delete an Recurrence
     *
     * @param int $recurrence_id ID of recurrence to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteRecurrenceWithHttpInfo($recurrence_id)
    {
        // verify the required parameter 'recurrence_id' is set
        if ($recurrence_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recurrence_id when calling deleteRecurrence');
        }
        // parse inputs
        $resourcePath = "/recurrence/{recurrenceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($recurrence_id !== null) {
            $resourcePath = str_replace(
                "{" . "recurrenceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($recurrence_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\ApiResponse',
                '/recurrence/{recurrenceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveListRecurrence
     *
     * Retrieve List of Recurrences
     *
     * @param \Bumbal\Client\Model\RecurrenceRetrieveListArguments $arguments Recurrence RetrieveList Arguments (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\RecurrenceModel[]
     */
    public function retrieveListRecurrence($arguments)
    {
        list($response) = $this->retrieveListRecurrenceWithHttpInfo($arguments);
        return $response;
    }

    /**
     * Operation retrieveListRecurrenceWithHttpInfo
     *
     * Retrieve List of Recurrences
     *
     * @param \Bumbal\Client\Model\RecurrenceRetrieveListArguments $arguments Recurrence RetrieveList Arguments (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\RecurrenceModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveListRecurrenceWithHttpInfo($arguments)
    {
        // verify the required parameter 'arguments' is set
        if ($arguments === null) {
            throw new \InvalidArgumentException('Missing the required parameter $arguments when calling retrieveListRecurrence');
        }
        // parse inputs
        $resourcePath = "/recurrence";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($arguments)) {
            $_tempBody = $arguments;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\RecurrenceModel[]',
                '/recurrence'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\RecurrenceModel[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\RecurrenceModel[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation retrieveRecurrence
     *
     * Retrieve a Recurrence
     *
     * @param int $recurrence_id ID of recurrence to retrieve (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\RecurrenceModel
     */
    public function retrieveRecurrence($recurrence_id)
    {
        list($response) = $this->retrieveRecurrenceWithHttpInfo($recurrence_id);
        return $response;
    }

    /**
     * Operation retrieveRecurrenceWithHttpInfo
     *
     * Retrieve a Recurrence
     *
     * @param int $recurrence_id ID of recurrence to retrieve (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\RecurrenceModel, HTTP status code, HTTP response headers (array of strings)
     */
    public function retrieveRecurrenceWithHttpInfo($recurrence_id)
    {
        // verify the required parameter 'recurrence_id' is set
        if ($recurrence_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recurrence_id when calling retrieveRecurrence');
        }
        // parse inputs
        $resourcePath = "/recurrence/{recurrenceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($recurrence_id !== null) {
            $resourcePath = str_replace(
                "{" . "recurrenceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($recurrence_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\RecurrenceModel',
                '/recurrence/{recurrenceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\RecurrenceModel', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\RecurrenceModel', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation updateRecurrence
     *
     * Update a Recurrence
     *
     * @param int $recurrence_id ID of recurrence to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return \Bumbal\Client\Model\ApiResponse
     */
    public function updateRecurrence($recurrence_id)
    {
        list($response) = $this->updateRecurrenceWithHttpInfo($recurrence_id);
        return $response;
    }

    /**
     * Operation updateRecurrenceWithHttpInfo
     *
     * Update a Recurrence
     *
     * @param int $recurrence_id ID of recurrence to update (required)
     * @throws \Bumbal\Client\ApiException on non-2xx response
     * @return array of \Bumbal\Client\Model\ApiResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateRecurrenceWithHttpInfo($recurrence_id)
    {
        // verify the required parameter 'recurrence_id' is set
        if ($recurrence_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $recurrence_id when calling updateRecurrence');
        }
        // parse inputs
        $resourcePath = "/recurrence/{recurrenceId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json', 'application/xml']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json', 'application/xml']);

        // path params
        if ($recurrence_id !== null) {
            $resourcePath = str_replace(
                "{" . "recurrenceId" . "}",
                $this->apiClient->getSerializer()->toPathValue($recurrence_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Bumbal\Client\Model\ApiResponse',
                '/recurrence/{recurrenceId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Bumbal\Client\Model\ApiResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Bumbal\Client\Model\ApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
