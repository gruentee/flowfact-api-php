<?php

namespace Flowfact\Resources;

/**
 * Class representing LocationType
 *
 *
 * XSD Type: locationType
 */
class LocationType extends BaseLocationType
{

    /**
     * @property string $country
     */
    private $country = null;

    /**
     * @property string $postalbox
     */
    private $postalbox = null;

    /**
     * @property string $postalboxcode
     */
    private $postalboxcode = null;

    /**
     * @property string $district
     */
    private $district = null;

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
     * Gets as postalbox
     *
     * @return string
     */
    public function getPostalbox()
    {
        return $this->postalbox;
    }

    /**
     * Sets a new postalbox
     *
     * @param string $postalbox
     * @return self
     */
    public function setPostalbox($postalbox)
    {
        $this->postalbox = $postalbox;
        return $this;
    }

    /**
     * Gets as postalboxcode
     *
     * @return string
     */
    public function getPostalboxcode()
    {
        return $this->postalboxcode;
    }

    /**
     * Sets a new postalboxcode
     *
     * @param string $postalboxcode
     * @return self
     */
    public function setPostalboxcode($postalboxcode)
    {
        $this->postalboxcode = $postalboxcode;
        return $this;
    }

    /**
     * Gets as district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets a new district
     *
     * @param string $district
     * @return self
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }


}

