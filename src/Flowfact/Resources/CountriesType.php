<?php

namespace Flowfact\Resources;

/**
 * Class representing CountriesType
 *
 *
 * XSD Type: countriesType
 */
class CountriesType
{

    /**
     * @property \Flowfact\Resources\CountryType[] $country
     */
    private $country = null;

    /**
     * Adds as country
     *
     * @return self
     * @param \Flowfact\Resources\CountryType $country
     */
    public function addToCountry(\Flowfact\Resources\CountryType $country)
    {
        $this->country[] = $country;
        return $this;
    }

    /**
     * isset country
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCountry($index)
    {
        return isset($this->country[$index]);
    }

    /**
     * unset country
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCountry($index)
    {
        unset($this->country[$index]);
    }

    /**
     * Gets as country
     *
     * @return \Flowfact\Resources\CountryType[]
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \Flowfact\Resources\CountryType[] $country
     * @return self
     */
    public function setCountry(array $country)
    {
        $this->country = $country;
        return $this;
    }


}

