<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedStringType
 *
 *
 * XSD Type: CustomizedStringType
 */
class CustomizedStringType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Workmanship").
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Defines what value is set (e.g. "Colonial
     *  Style").
     *
     * @property string $value
     */
    private $value = null;

    /**
     * Gets as name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Workmanship").
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
     * Defines what kind of data the given field
     *  represents (e.g. "Workmanship").
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
     * Gets as value
     *
     * Defines what value is set (e.g. "Colonial
     *  Style").
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Defines what value is set (e.g. "Colonial
     *  Style").
     *
     * @param string $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

