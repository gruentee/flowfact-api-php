<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedCurrencyIntervalType
 *
 *
 * XSD Type: CustomizedCurrencyIntervalType
 */
class CustomizedCurrencyIntervalType extends BaseCurrencyType
{

    /**
     * Defines the minimum value (e.g. 300000.50 EUR).
     *
     * @property \Flowfact\Resources\CurrencyType $valuefrom
     */
    private $valuefrom = null;

    /**
     * Defines the minimum value (e.g. 300000.50 EUR).
     *
     * @property \Flowfact\Resources\CurrencyType $valueto
     */
    private $valueto = null;

    /**
     * @property string $formattedValuefrom
     */
    private $formattedValuefrom = null;

    /**
     * @property string $formattedValueto
     */
    private $formattedValueto = null;

    /**
     * Gets as valuefrom
     *
     * Defines the minimum value (e.g. 300000.50 EUR).
     *
     * @return \Flowfact\Resources\CurrencyType
     */
    public function getValuefrom()
    {
        return $this->valuefrom;
    }

    /**
     * Sets a new valuefrom
     *
     * Defines the minimum value (e.g. 300000.50 EUR).
     *
     * @param \Flowfact\Resources\CurrencyType $valuefrom
     * @return self
     */
    public function setValuefrom(\Flowfact\Resources\CurrencyType $valuefrom)
    {
        $this->valuefrom = $valuefrom;
        return $this;
    }

    /**
     * Gets as valueto
     *
     * Defines the minimum value (e.g. 300000.50 EUR).
     *
     * @return \Flowfact\Resources\CurrencyType
     */
    public function getValueto()
    {
        return $this->valueto;
    }

    /**
     * Sets a new valueto
     *
     * Defines the minimum value (e.g. 300000.50 EUR).
     *
     * @param \Flowfact\Resources\CurrencyType $valueto
     * @return self
     */
    public function setValueto(\Flowfact\Resources\CurrencyType $valueto)
    {
        $this->valueto = $valueto;
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

