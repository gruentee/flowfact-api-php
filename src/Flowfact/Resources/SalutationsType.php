<?php

namespace Flowfact\Resources;

/**
 * Class representing SalutationsType
 *
 *
 * XSD Type: salutationsType
 */
class SalutationsType
{

    /**
     * @property \Flowfact\Resources\SalutationType[] $salutation
     */
    private $salutation = null;

    /**
     * Adds as salutation
     *
     * @return self
     * @param \Flowfact\Resources\SalutationType $salutation
     */
    public function addToSalutation(\Flowfact\Resources\SalutationType $salutation)
    {
        $this->salutation[] = $salutation;
        return $this;
    }

    /**
     * isset salutation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSalutation($index)
    {
        return isset($this->salutation[$index]);
    }

    /**
     * unset salutation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSalutation($index)
    {
        unset($this->salutation[$index]);
    }

    /**
     * Gets as salutation
     *
     * @return \Flowfact\Resources\SalutationType[]
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Sets a new salutation
     *
     * @param \Flowfact\Resources\SalutationType[] $salutation
     * @return self
     */
    public function setSalutation(array $salutation)
    {
        $this->salutation = $salutation;
        return $this;
    }


}

