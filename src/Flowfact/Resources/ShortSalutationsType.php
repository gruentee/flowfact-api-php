<?php

namespace Flowfact\Resources;

/**
 * Class representing ShortSalutationsType
 *
 *
 * XSD Type: shortSalutationsType
 */
class ShortSalutationsType
{

    /**
     * @property string[] $shortsalutation
     */
    private $shortsalutation = null;

    /**
     * Adds as shortsalutation
     *
     * @return self
     * @param string $shortsalutation
     */
    public function addToShortsalutation($shortsalutation)
    {
        $this->shortsalutation[] = $shortsalutation;
        return $this;
    }

    /**
     * isset shortsalutation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShortsalutation($index)
    {
        return isset($this->shortsalutation[$index]);
    }

    /**
     * unset shortsalutation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShortsalutation($index)
    {
        unset($this->shortsalutation[$index]);
    }

    /**
     * Gets as shortsalutation
     *
     * @return string[]
     */
    public function getShortsalutation()
    {
        return $this->shortsalutation;
    }

    /**
     * Sets a new shortsalutation
     *
     * @param string[] $shortsalutation
     * @return self
     */
    public function setShortsalutation(array $shortsalutation)
    {
        $this->shortsalutation = $shortsalutation;
        return $this;
    }


}

