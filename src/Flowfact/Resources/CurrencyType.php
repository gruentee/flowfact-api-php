<?php

namespace Flowfact\Resources;

/**
 * Class representing CurrencyType
 *
 *
 * XSD Type: currencyType
 */
class CurrencyType
{

    /**
     * Defines which amount is set to this field
     *
     * @property float $value
     */
    private $value = null;

    /**
     * Defines which unit the value is of (e.g. EUR, USD
     *  or SFR)
     *
     * @property string $unit
     */
    private $unit = null;

    /**
     * Gets as value
     *
     * Defines which amount is set to this field
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
     * Defines which amount is set to this field
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
     * Defines which unit the value is of (e.g. EUR, USD
     *  or SFR)
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
     * Defines which unit the value is of (e.g. EUR, USD
     *  or SFR)
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }


}

