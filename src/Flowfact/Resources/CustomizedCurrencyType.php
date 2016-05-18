<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedCurrencyType
 *
 *
 * XSD Type: CustomizedCurrencyType
 */
class CustomizedCurrencyType extends BaseCurrencyType
{

    /**
     * @property \Flowfact\Resources\CurrencyType $value
     */
    private $value = null;

    /**
     * @property string $formattedValue
     */
    private $formattedValue = null;

    /**
     * Gets as value
     *
     * @return \Flowfact\Resources\CurrencyType
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \Flowfact\Resources\CurrencyType $value
     * @return self
     */
    public function setValue(\Flowfact\Resources\CurrencyType $value)
    {
        $this->value = $value;
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

