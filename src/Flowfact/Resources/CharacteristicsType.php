<?php

namespace Flowfact\Resources;

/**
 * Class representing CharacteristicsType
 *
 *
 * XSD Type: characteristicsType
 */
class CharacteristicsType
{

    /**
     * @property \Flowfact\Resources\CharacteristicType[] $characteristic
     */
    private $characteristic = null;

    /**
     * Adds as characteristic
     *
     * @return self
     * @param \Flowfact\Resources\CharacteristicType $characteristic
     */
    public function addToCharacteristic(\Flowfact\Resources\CharacteristicType $characteristic)
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
     * @return \Flowfact\Resources\CharacteristicType[]
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * @param \Flowfact\Resources\CharacteristicType[] $characteristic
     * @return self
     */
    public function setCharacteristic(array $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }


}

