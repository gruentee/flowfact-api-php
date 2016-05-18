<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedCityLocationIntervalType
 *
 *
 * XSD Type: CustomizedCityLocationIntervalType
 */
class CustomizedCityLocationIntervalType extends BaseCustomizedType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property
     * \Flowfact\Resources\CustomizedCityLocationIntervalType\PostalcodeIntervalAType
     * $postalcodeInterval
     */
    private $postalcodeInterval = null;

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
     * Gets as postalcodeInterval
     *
     * @return
     * \Flowfact\Resources\CustomizedCityLocationIntervalType\PostalcodeIntervalAType
     */
    public function getPostalcodeInterval()
    {
        return $this->postalcodeInterval;
    }

    /**
     * Sets a new postalcodeInterval
     *
     * @param
     * \Flowfact\Resources\CustomizedCityLocationIntervalType\PostalcodeIntervalAType
     * $postalcodeInterval
     * @return self
     */
    public function setPostalcodeInterval(\Flowfact\Resources\CustomizedCityLocationIntervalType\PostalcodeIntervalAType $postalcodeInterval)
    {
        $this->postalcodeInterval = $postalcodeInterval;
        return $this;
    }


}

