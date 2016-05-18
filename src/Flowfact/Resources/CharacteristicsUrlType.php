<?php

namespace Flowfact\Resources;

/**
 * Class representing CharacteristicsUrlType
 *
 *
 * XSD Type: characteristicsUrlType
 */
class CharacteristicsUrlType extends IdlinkType
{

    /**
     * @property \Flowfact\Resources\IdlinkType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Adds as characteristic
     *
     * @return self
     * @param \Flowfact\Resources\IdlinkType $characteristic
     */
    public function addToCharacteristic(\Flowfact\Resources\IdlinkType $characteristic)
    {
        $this->characteristic[] = $characteristic;
        return $this;
    }

    /**
     * isset characteristic
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCharacteristic($index)
    {
        return isset($this->characteristic[$index]);
    }

    /**
     * unset characteristic
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCharacteristic($index)
    {
        unset($this->characteristic[$index]);
    }

    /**
     * Gets as characteristic
     *
     * @return \Flowfact\Resources\IdlinkType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * @param \Flowfact\Resources\IdlinkType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }


}

