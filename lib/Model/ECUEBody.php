<?php
/**
 * ECUEBody
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
 * ECUEBody Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ECUEBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ECUEBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sem' => 'int',
        'nom_ecue' => 'string',
        'cnu' => 'int',
        'ects' => 'float',
        'cm' => 'float',
        'td' => 'float',
        'tp' => 'float',
        'dist' => 'float',
        'gpcm' => 'int',
        'gptd' => 'int',
        'gptp' => 'int',
        'ccec' => 'float',
        'ccor' => 'float',
        'cctp' => 'float',
        'ccnb' => 'float',
        'exec' => 'float',
        'exor' => 'float',
        'extp' => 'float',
        'cciec' => 'float',
        'ccior' => 'float',
        'ccitp' => 'float',
        'ccinb' => 'float',
        'deec' => 'float',
        'deor' => 'float',
        'detp' => 'float',
        's2ec' => 'float',
        's2or' => 'float',
        's2tp' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sem' => null,
        'nom_ecue' => null,
        'cnu' => null,
        'ects' => 'float',
        'cm' => 'float',
        'td' => 'float',
        'tp' => 'float',
        'dist' => 'float',
        'gpcm' => null,
        'gptd' => null,
        'gptp' => null,
        'ccec' => 'float',
        'ccor' => 'float',
        'cctp' => 'float',
        'ccnb' => 'float',
        'exec' => 'float',
        'exor' => 'float',
        'extp' => 'float',
        'cciec' => 'float',
        'ccior' => 'float',
        'ccitp' => 'float',
        'ccinb' => 'float',
        'deec' => 'float',
        'deor' => 'float',
        'detp' => 'float',
        's2ec' => 'float',
        's2or' => 'float',
        's2tp' => 'float'
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
        'sem' => 'sem',
        'nom_ecue' => 'nomECUE',
        'cnu' => 'CNU',
        'ects' => 'ECTS',
        'cm' => 'cm',
        'td' => 'td',
        'tp' => 'tp',
        'dist' => 'dist',
        'gpcm' => 'gpcm',
        'gptd' => 'gptd',
        'gptp' => 'gptp',
        'ccec' => 'ccec',
        'ccor' => 'ccor',
        'cctp' => 'cctp',
        'ccnb' => 'ccnb',
        'exec' => 'exec',
        'exor' => 'exor',
        'extp' => 'extp',
        'cciec' => 'cciec',
        'ccior' => 'ccior',
        'ccitp' => 'ccitp',
        'ccinb' => 'ccinb',
        'deec' => 'deec',
        'deor' => 'deor',
        'detp' => 'detp',
        's2ec' => 's2ec',
        's2or' => 's2or',
        's2tp' => 's2tp'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sem' => 'setSem',
        'nom_ecue' => 'setNomEcue',
        'cnu' => 'setCnu',
        'ects' => 'setEcts',
        'cm' => 'setCm',
        'td' => 'setTd',
        'tp' => 'setTp',
        'dist' => 'setDist',
        'gpcm' => 'setGpcm',
        'gptd' => 'setGptd',
        'gptp' => 'setGptp',
        'ccec' => 'setCcec',
        'ccor' => 'setCcor',
        'cctp' => 'setCctp',
        'ccnb' => 'setCcnb',
        'exec' => 'setExec',
        'exor' => 'setExor',
        'extp' => 'setExtp',
        'cciec' => 'setCciec',
        'ccior' => 'setCcior',
        'ccitp' => 'setCcitp',
        'ccinb' => 'setCcinb',
        'deec' => 'setDeec',
        'deor' => 'setDeor',
        'detp' => 'setDetp',
        's2ec' => 'setS2ec',
        's2or' => 'setS2or',
        's2tp' => 'setS2tp'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sem' => 'getSem',
        'nom_ecue' => 'getNomEcue',
        'cnu' => 'getCnu',
        'ects' => 'getEcts',
        'cm' => 'getCm',
        'td' => 'getTd',
        'tp' => 'getTp',
        'dist' => 'getDist',
        'gpcm' => 'getGpcm',
        'gptd' => 'getGptd',
        'gptp' => 'getGptp',
        'ccec' => 'getCcec',
        'ccor' => 'getCcor',
        'cctp' => 'getCctp',
        'ccnb' => 'getCcnb',
        'exec' => 'getExec',
        'exor' => 'getExor',
        'extp' => 'getExtp',
        'cciec' => 'getCciec',
        'ccior' => 'getCcior',
        'ccitp' => 'getCcitp',
        'ccinb' => 'getCcinb',
        'deec' => 'getDeec',
        'deor' => 'getDeor',
        'detp' => 'getDetp',
        's2ec' => 'getS2ec',
        's2or' => 'getS2or',
        's2tp' => 'getS2tp'
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
        $this->container['sem'] = isset($data['sem']) ? $data['sem'] : null;
        $this->container['nom_ecue'] = isset($data['nom_ecue']) ? $data['nom_ecue'] : null;
        $this->container['cnu'] = isset($data['cnu']) ? $data['cnu'] : null;
        $this->container['ects'] = isset($data['ects']) ? $data['ects'] : null;
        $this->container['cm'] = isset($data['cm']) ? $data['cm'] : null;
        $this->container['td'] = isset($data['td']) ? $data['td'] : null;
        $this->container['tp'] = isset($data['tp']) ? $data['tp'] : null;
        $this->container['dist'] = isset($data['dist']) ? $data['dist'] : null;
        $this->container['gpcm'] = isset($data['gpcm']) ? $data['gpcm'] : null;
        $this->container['gptd'] = isset($data['gptd']) ? $data['gptd'] : null;
        $this->container['gptp'] = isset($data['gptp']) ? $data['gptp'] : null;
        $this->container['ccec'] = isset($data['ccec']) ? $data['ccec'] : null;
        $this->container['ccor'] = isset($data['ccor']) ? $data['ccor'] : null;
        $this->container['cctp'] = isset($data['cctp']) ? $data['cctp'] : null;
        $this->container['ccnb'] = isset($data['ccnb']) ? $data['ccnb'] : null;
        $this->container['exec'] = isset($data['exec']) ? $data['exec'] : null;
        $this->container['exor'] = isset($data['exor']) ? $data['exor'] : null;
        $this->container['extp'] = isset($data['extp']) ? $data['extp'] : null;
        $this->container['cciec'] = isset($data['cciec']) ? $data['cciec'] : null;
        $this->container['ccior'] = isset($data['ccior']) ? $data['ccior'] : null;
        $this->container['ccitp'] = isset($data['ccitp']) ? $data['ccitp'] : null;
        $this->container['ccinb'] = isset($data['ccinb']) ? $data['ccinb'] : null;
        $this->container['deec'] = isset($data['deec']) ? $data['deec'] : null;
        $this->container['deor'] = isset($data['deor']) ? $data['deor'] : null;
        $this->container['detp'] = isset($data['detp']) ? $data['detp'] : null;
        $this->container['s2ec'] = isset($data['s2ec']) ? $data['s2ec'] : null;
        $this->container['s2or'] = isset($data['s2or']) ? $data['s2or'] : null;
        $this->container['s2tp'] = isset($data['s2tp']) ? $data['s2tp'] : null;
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
     * Gets sem
     *
     * @return int
     */
    public function getSem()
    {
        return $this->container['sem'];
    }

    /**
     * Sets sem
     *
     * @param int $sem sem
     *
     * @return $this
     */
    public function setSem($sem)
    {
        $this->container['sem'] = $sem;

        return $this;
    }

    /**
     * Gets nom_ecue
     *
     * @return string
     */
    public function getNomEcue()
    {
        return $this->container['nom_ecue'];
    }

    /**
     * Sets nom_ecue
     *
     * @param string $nom_ecue nom_ecue
     *
     * @return $this
     */
    public function setNomEcue($nom_ecue)
    {
        $this->container['nom_ecue'] = $nom_ecue;

        return $this;
    }

    /**
     * Gets cnu
     *
     * @return int
     */
    public function getCnu()
    {
        return $this->container['cnu'];
    }

    /**
     * Sets cnu
     *
     * @param int $cnu cnu
     *
     * @return $this
     */
    public function setCnu($cnu)
    {
        $this->container['cnu'] = $cnu;

        return $this;
    }

    /**
     * Gets ects
     *
     * @return float
     */
    public function getEcts()
    {
        return $this->container['ects'];
    }

    /**
     * Sets ects
     *
     * @param float $ects ects
     *
     * @return $this
     */
    public function setEcts($ects)
    {
        $this->container['ects'] = $ects;

        return $this;
    }

    /**
     * Gets cm
     *
     * @return float
     */
    public function getCm()
    {
        return $this->container['cm'];
    }

    /**
     * Sets cm
     *
     * @param float $cm cm
     *
     * @return $this
     */
    public function setCm($cm)
    {
        $this->container['cm'] = $cm;

        return $this;
    }

    /**
     * Gets td
     *
     * @return float
     */
    public function getTd()
    {
        return $this->container['td'];
    }

    /**
     * Sets td
     *
     * @param float $td td
     *
     * @return $this
     */
    public function setTd($td)
    {
        $this->container['td'] = $td;

        return $this;
    }

    /**
     * Gets tp
     *
     * @return float
     */
    public function getTp()
    {
        return $this->container['tp'];
    }

    /**
     * Sets tp
     *
     * @param float $tp tp
     *
     * @return $this
     */
    public function setTp($tp)
    {
        $this->container['tp'] = $tp;

        return $this;
    }

    /**
     * Gets dist
     *
     * @return float
     */
    public function getDist()
    {
        return $this->container['dist'];
    }

    /**
     * Sets dist
     *
     * @param float $dist dist
     *
     * @return $this
     */
    public function setDist($dist)
    {
        $this->container['dist'] = $dist;

        return $this;
    }

    /**
     * Gets gpcm
     *
     * @return int
     */
    public function getGpcm()
    {
        return $this->container['gpcm'];
    }

    /**
     * Sets gpcm
     *
     * @param int $gpcm gpcm
     *
     * @return $this
     */
    public function setGpcm($gpcm)
    {
        $this->container['gpcm'] = $gpcm;

        return $this;
    }

    /**
     * Gets gptd
     *
     * @return int
     */
    public function getGptd()
    {
        return $this->container['gptd'];
    }

    /**
     * Sets gptd
     *
     * @param int $gptd gptd
     *
     * @return $this
     */
    public function setGptd($gptd)
    {
        $this->container['gptd'] = $gptd;

        return $this;
    }

    /**
     * Gets gptp
     *
     * @return int
     */
    public function getGptp()
    {
        return $this->container['gptp'];
    }

    /**
     * Sets gptp
     *
     * @param int $gptp gptp
     *
     * @return $this
     */
    public function setGptp($gptp)
    {
        $this->container['gptp'] = $gptp;

        return $this;
    }

    /**
     * Gets ccec
     *
     * @return float
     */
    public function getCcec()
    {
        return $this->container['ccec'];
    }

    /**
     * Sets ccec
     *
     * @param float $ccec ccec
     *
     * @return $this
     */
    public function setCcec($ccec)
    {
        $this->container['ccec'] = $ccec;

        return $this;
    }

    /**
     * Gets ccor
     *
     * @return float
     */
    public function getCcor()
    {
        return $this->container['ccor'];
    }

    /**
     * Sets ccor
     *
     * @param float $ccor ccor
     *
     * @return $this
     */
    public function setCcor($ccor)
    {
        $this->container['ccor'] = $ccor;

        return $this;
    }

    /**
     * Gets cctp
     *
     * @return float
     */
    public function getCctp()
    {
        return $this->container['cctp'];
    }

    /**
     * Sets cctp
     *
     * @param float $cctp cctp
     *
     * @return $this
     */
    public function setCctp($cctp)
    {
        $this->container['cctp'] = $cctp;

        return $this;
    }

    /**
     * Gets ccnb
     *
     * @return float
     */
    public function getCcnb()
    {
        return $this->container['ccnb'];
    }

    /**
     * Sets ccnb
     *
     * @param float $ccnb ccnb
     *
     * @return $this
     */
    public function setCcnb($ccnb)
    {
        $this->container['ccnb'] = $ccnb;

        return $this;
    }

    /**
     * Gets exec
     *
     * @return float
     */
    public function getExec()
    {
        return $this->container['exec'];
    }

    /**
     * Sets exec
     *
     * @param float $exec exec
     *
     * @return $this
     */
    public function setExec($exec)
    {
        $this->container['exec'] = $exec;

        return $this;
    }

    /**
     * Gets exor
     *
     * @return float
     */
    public function getExor()
    {
        return $this->container['exor'];
    }

    /**
     * Sets exor
     *
     * @param float $exor exor
     *
     * @return $this
     */
    public function setExor($exor)
    {
        $this->container['exor'] = $exor;

        return $this;
    }

    /**
     * Gets extp
     *
     * @return float
     */
    public function getExtp()
    {
        return $this->container['extp'];
    }

    /**
     * Sets extp
     *
     * @param float $extp extp
     *
     * @return $this
     */
    public function setExtp($extp)
    {
        $this->container['extp'] = $extp;

        return $this;
    }

    /**
     * Gets cciec
     *
     * @return float
     */
    public function getCciec()
    {
        return $this->container['cciec'];
    }

    /**
     * Sets cciec
     *
     * @param float $cciec cciec
     *
     * @return $this
     */
    public function setCciec($cciec)
    {
        $this->container['cciec'] = $cciec;

        return $this;
    }

    /**
     * Gets ccior
     *
     * @return float
     */
    public function getCcior()
    {
        return $this->container['ccior'];
    }

    /**
     * Sets ccior
     *
     * @param float $ccior ccior
     *
     * @return $this
     */
    public function setCcior($ccior)
    {
        $this->container['ccior'] = $ccior;

        return $this;
    }

    /**
     * Gets ccitp
     *
     * @return float
     */
    public function getCcitp()
    {
        return $this->container['ccitp'];
    }

    /**
     * Sets ccitp
     *
     * @param float $ccitp ccitp
     *
     * @return $this
     */
    public function setCcitp($ccitp)
    {
        $this->container['ccitp'] = $ccitp;

        return $this;
    }

    /**
     * Gets ccinb
     *
     * @return float
     */
    public function getCcinb()
    {
        return $this->container['ccinb'];
    }

    /**
     * Sets ccinb
     *
     * @param float $ccinb ccinb
     *
     * @return $this
     */
    public function setCcinb($ccinb)
    {
        $this->container['ccinb'] = $ccinb;

        return $this;
    }

    /**
     * Gets deec
     *
     * @return float
     */
    public function getDeec()
    {
        return $this->container['deec'];
    }

    /**
     * Sets deec
     *
     * @param float $deec deec
     *
     * @return $this
     */
    public function setDeec($deec)
    {
        $this->container['deec'] = $deec;

        return $this;
    }

    /**
     * Gets deor
     *
     * @return float
     */
    public function getDeor()
    {
        return $this->container['deor'];
    }

    /**
     * Sets deor
     *
     * @param float $deor deor
     *
     * @return $this
     */
    public function setDeor($deor)
    {
        $this->container['deor'] = $deor;

        return $this;
    }

    /**
     * Gets detp
     *
     * @return float
     */
    public function getDetp()
    {
        return $this->container['detp'];
    }

    /**
     * Sets detp
     *
     * @param float $detp detp
     *
     * @return $this
     */
    public function setDetp($detp)
    {
        $this->container['detp'] = $detp;

        return $this;
    }

    /**
     * Gets s2ec
     *
     * @return float
     */
    public function getS2ec()
    {
        return $this->container['s2ec'];
    }

    /**
     * Sets s2ec
     *
     * @param float $s2ec s2ec
     *
     * @return $this
     */
    public function setS2ec($s2ec)
    {
        $this->container['s2ec'] = $s2ec;

        return $this;
    }

    /**
     * Gets s2or
     *
     * @return float
     */
    public function getS2or()
    {
        return $this->container['s2or'];
    }

    /**
     * Sets s2or
     *
     * @param float $s2or s2or
     *
     * @return $this
     */
    public function setS2or($s2or)
    {
        $this->container['s2or'] = $s2or;

        return $this;
    }

    /**
     * Gets s2tp
     *
     * @return float
     */
    public function getS2tp()
    {
        return $this->container['s2tp'];
    }

    /**
     * Sets s2tp
     *
     * @param float $s2tp s2tp
     *
     * @return $this
     */
    public function setS2tp($s2tp)
    {
        $this->container['s2tp'] = $s2tp;

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


