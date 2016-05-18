<?php

namespace Flowfact\Resources;

/**
 * Class representing BaseCurrencyType
 *
 *
 * XSD Type: baseCurrencyType
 */
class BaseCurrencyType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Currently unrented", "Target selling price range").
     *
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * Gets as name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Currently unrented", "Target selling price range").
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
     *  represents (e.g. "Currently unrented", "Target selling price range").
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


}

