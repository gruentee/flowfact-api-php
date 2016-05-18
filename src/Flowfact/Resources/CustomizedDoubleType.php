<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedDoubleType
 *
 *
 * XSD Type: CustomizedDoubleType
 */
class CustomizedDoubleType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Number of rooms").
     *
     * @property string $name
     */
    private $name = null;

    /**
     * @property float $value
     */
    private $value = null;

    /**
     * @property string $unit
     */
    private $unit = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $formattedValue
     */
    private $formattedValue = null;

    /**
     * Gets as name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Number of rooms").
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Number of rooms").
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
        return $this;
    }

    /**
     * Gets as formattedValue
     *
     * @return string
     */
    public function getFormattedValue()
    {
        return $this->formattedValue;
    }

    /**
     * Sets a new formattedValue
     *
     * @param string $formattedValue
     * @return self
     */
    public function setFormattedValue($formattedValue)
    {
        $this->formattedValue = $formattedValue;
        return $this;
    }


}

