<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedDateType
 *
 *
 * XSD Type: CustomizedDateType
 */
class CustomizedDateType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Target selling price range" for a possible
     *  discount).
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Defines what value is set (e.g. "2012-06-16").
     *
     * @property \DateTime $value
     */
    private $value = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $formattedValue
     */
    private $formattedValue = null;

    /**
     * Gets as name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Target selling price range" for a possible
     *  discount).
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
     *  represents (e.g. "Target selling price range" for a possible
     *  discount).
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
     * Defines what value is set (e.g. "2012-06-16").
     *
     * @return \DateTime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * Defines what value is set (e.g. "2012-06-16").
     *
     * @param \DateTime $value
     * @return self
     */
    public function setValue(\DateTime $value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Sets a new format
     *
     * @param string $format
     * @return self
     */
    public function setFormat($format)
    {
        $this->format = $format;
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

