<?php

namespace Flowfact\Resources;

/**
 * Class representing BaseLocationType
 *
 *
 * XSD Type: baseLocationType
 */
class BaseLocationType
{

    /**
     * @property string $street
     */
    private $street = null;

    /**
     * @property string $city
     */
    private $city = null;

    /**
     * @property string $postalcode
     */
    private $postalcode = null;

    /**
     * Gets as street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

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

