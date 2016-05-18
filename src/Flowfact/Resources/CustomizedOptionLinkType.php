<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedOptionLinkType
 *
 *
 * XSD Type: customizedOptionLinkType
 */
class CustomizedOptionLinkType extends PropertyType
{

    /**
     * @property \Flowfact\Resources\AvailableOptionsType $options
     */
    private $options = null;

    /**
     * Gets as options
     *
     * @return \Flowfact\Resources\AvailableOptionsType
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options
     *
     * @param \Flowfact\Resources\AvailableOptionsType $options
     * @return self
     */
    public function setOptions(\Flowfact\Resources\AvailableOptionsType $options)
    {
        $this->options = $options;
        return $this;
    }


}

