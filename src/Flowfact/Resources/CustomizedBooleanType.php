<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedBooleanType
 *
 *
 * XSD Type: CustomizedBooleanType
 */
class CustomizedBooleanType extends BaseCustomizedType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property boolean $value
     */
    private $value = null;

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
     * Gets as value
     *
     * @return boolean
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param boolean $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }


}

