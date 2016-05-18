<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedCityLocationType
 *
 *
 * XSD Type: CustomizedCityLocationType
 */
class CustomizedCityLocationType extends BaseCustomizedType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \Flowfact\Resources\PostalCodeType $location
     */
    private $location = null;

    /**
     * @property string $formattedValue
     */
    private $formattedValue = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return \Flowfact\Resources\PostalCodeType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \Flowfact\Resources\PostalCodeType $location
     * @return self
     */
    public function setLocation(\Flowfact\Resources\PostalCodeType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as formattedValue
     *
     * @return string
     */
    public function getFormattedValue()
    {
        return $this->formattedValue;
    }

    /**
     * Sets a new formattedValue
     *
     * @param string $formattedValue
     * @return self
     */
    public function setFormattedValue($formattedValue)
    {
        $this->formattedValue = $formattedValue;
        return $this;
    }


}

