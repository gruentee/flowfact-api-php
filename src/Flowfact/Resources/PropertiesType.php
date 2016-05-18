<?php

namespace Flowfact\Resources;

/**
 * Class representing PropertiesType
 *
 *
 * XSD Type: propertiesType
 */
class PropertiesType
{

    /**
     * @property \Flowfact\Resources\PropertyType[] $property
     */
    private $property = null;

    /**
     * Adds as property
     *
     * @return self
     * @param \Flowfact\Resources\PropertyType $property
     */
    public function addToProperty(\Flowfact\Resources\PropertyType $property)
    {
        $this->property[] = $property;
        return $this;
    }

    /**
     * isset property
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProperty($index)
    {
        return isset($this->property[$index]);
    }

    /**
     * unset property
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProperty($index)
    {
        unset($this->property[$index]);
    }

    /**
     * Gets as property
     *
     * @return \Flowfact\Resources\PropertyType[]
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Sets a new property
     *
     * @param \Flowfact\Resources\PropertyType[] $property
     * @return self
     */
    public function setProperty(array $property)
    {
        $this->property = $property;
        return $this;
    }


}

