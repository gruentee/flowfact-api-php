<?php

namespace Flowfact\Resources;

/**
 * Class representing AvailableOptionsType
 *
 *
 * XSD Type: availableOptionsType
 */
class AvailableOptionsType extends LinkType
{

    /**
     * @property \Flowfact\Resources\LinkedAvailableOptionType[] $value
     */
    private $value = null;

    /**
     * Adds as value
     *
     * @return self
     * @param \Flowfact\Resources\LinkedAvailableOptionType $value
     */
    public function addToValue(\Flowfact\Resources\LinkedAvailableOptionType $value)
    {
        $this->value[] = $value;
        return $this;
    }

    /**
     * isset value
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetValue($index)
    {
        return isset($this->value[$index]);
    }

    /**
     * unset value
     *
     * @param scalar $index
     * @return void
     */
    public function unsetValue($index)
    {
        unset($this->value[$index]);
    }

    /**
     * Gets as value
     *
     * @return \Flowfact\Resources\LinkedAvailableOptionType[]
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param \Flowfact\Resources\LinkedAvailableOptionType[] $value
     * @return self
     */
    public function setValue(array $value)
    {
        $this->value = $value;
        return $this;
    }


}

