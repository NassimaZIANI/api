<?php
/**
 * Modalite
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * apogee API
 *
 * API for apogee
 *
 * OpenAPI spec version: 1.0.0
 * Contact: nassima.ziani1996@gmail.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Modalite Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Modalite implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Modalite';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'modalite' => '\Swagger\Client\Model\Moda',
        'nom_modalite' => 'string',
        'list_parcours' => '\Swagger\Client\Model\ListParcours'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'modalite' => null,
        'nom_modalite' => null,
        'list_parcours' => null
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
        'modalite' => 'modalite',
        'nom_modalite' => 'nomModalite',
        'list_parcours' => 'listParcours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'modalite' => 'setModalite',
        'nom_modalite' => 'setNomModalite',
        'list_parcours' => 'setListParcours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'modalite' => 'getModalite',
        'nom_modalite' => 'getNomModalite',
        'list_parcours' => 'getListParcours'
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
        $this->container['modalite'] = isset($data['modalite']) ? $data['modalite'] : null;
        $this->container['nom_modalite'] = isset($data['nom_modalite']) ? $data['nom_modalite'] : null;
        $this->container['list_parcours'] = isset($data['list_parcours']) ? $data['list_parcours'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets modalite
     *
     * @return \Swagger\Client\Model\Moda
     */
    public function getModalite()
    {
        return $this->container['modalite'];
    }

    /**
     * Sets modalite
     *
     * @param \Swagger\Client\Model\Moda $modalite modalite
     *
     * @return $this
     */
    public function setModalite($modalite)
    {
        $this->container['modalite'] = $modalite;

        return $this;
    }

    /**
     * Gets nom_modalite
     *
     * @return string
     */
    public function getNomModalite()
    {
        return $this->container['nom_modalite'];
    }

    /**
     * Sets nom_modalite
     *
     * @param string $nom_modalite nom_modalite
     *
     * @return $this
     */
    public function setNomModalite($nom_modalite)
    {
        $this->container['nom_modalite'] = $nom_modalite;

        return $this;
    }

    /**
     * Gets list_parcours
     *
     * @return \Swagger\Client\Model\ListParcours
     */
    public function getListParcours()
    {
        return $this->container['list_parcours'];
    }

    /**
     * Sets list_parcours
     *
     * @param \Swagger\Client\Model\ListParcours $list_parcours list_parcours
     *
     * @return $this
     */
    public function setListParcours($list_parcours)
    {
        $this->container['list_parcours'] = $list_parcours;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
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


