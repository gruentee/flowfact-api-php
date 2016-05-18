<?php

namespace Flowfact\Resources;

/**
 * Class representing PostalCodeType
 *
 *
 * XSD Type: postalCodeType
 */
class PostalCodeType
{

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $postalcode
     */
    private $postalcode = null;

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

    /**
     * Gets as postalcode
     *
     * @return string
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Sets a new postalcode
     *
     * @param string $postalcode
     * @return self
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
        return $this;
    }


}

