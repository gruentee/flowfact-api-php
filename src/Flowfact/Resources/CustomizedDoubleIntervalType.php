<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedDoubleIntervalType
 *
 *
 * XSD Type: CustomizedDoubleIntervalType
 */
class CustomizedDoubleIntervalType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Number of rooms").
     *
     * @property string $name
     */
    private $name = null;

    /**
     * @property float $valuefrom
     */
    private $valuefrom = null;

    /**
     * @property float $valueto
     */
    private $valueto = null;

    /**
     * @property string $unit
     */
    private $unit = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $formattedValuefrom
     */
    private $formattedValuefrom = null;

    /**
     * @property string $formattedValueto
     */
    private $formattedValueto = null;

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
     * Gets as valuefrom
     *
     * @return float
     */
    public function getValuefrom()
    {
        return $this->valuefrom;
    }

    /**
     * Sets a new valuefrom
     *
     * @param float $valuefrom
     * @return self
     */
    public function setValuefrom($valuefrom)
    {
        $this->valuefrom = $valuefrom;
        return $this;
    }

    /**
     * Gets as valueto
     *
     * @return float
     */
    public function getValueto()
    {
        return $this->valueto;
    }

    /**
     * Sets a new valueto
     *
     * @param float $valueto
     * @return self
     */
    public function setValueto($valueto)
    {
        $this->valueto = $valueto;
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
     * Gets as formattedValuefrom
     *
     * @return string
     */
    public function getFormattedValuefrom()
    {
        return $this->formattedValuefrom;
    }

    /**
     * Sets a new formattedValuefrom
     *
     * @param string $formattedValuefrom
     * @return self
     */
    public function setFormattedValuefrom($formattedValuefrom)
    {
        $this->formattedValuefrom = $formattedValuefrom;
        return $this;
    }

    /**
     * Gets as formattedValueto
     *
     * @return string
     */
    public function getFormattedValueto()
    {
        return $this->formattedValueto;
    }

    /**
     * Sets a new formattedValueto
     *
     * @param string $formattedValueto
     * @return self
     */
    public function setFormattedValueto($formattedValueto)
    {
        $this->formattedValueto = $formattedValueto;
        return $this;
    }


}

