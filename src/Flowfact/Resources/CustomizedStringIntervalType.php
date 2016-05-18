<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedStringIntervalType
 *
 *
 * XSD Type: CustomizedStringIntervalType
 */
class CustomizedStringIntervalType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Workmanship").
     *
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $valuefrom
     */
    private $valuefrom = null;

    /**
     * @property string $valueto
     */
    private $valueto = null;

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
     * Gets as valuefrom
     *
     * @return string
     */
    public function getValuefrom()
    {
        return $this->valuefrom;
    }

    /**
     * Sets a new valuefrom
     *
     * @param string $valuefrom
     * @return self
     */
    public function setValuefrom($valuefrom)
    {
        $this->valuefrom = $valuefrom;
        return $this;
    }

    /**
     * Gets as valueto
     *
     * @return string
     */
    public function getValueto()
    {
        return $this->valueto;
    }

    /**
     * Sets a new valueto
     *
     * @param string $valueto
     * @return self
     */
    public function setValueto($valueto)
    {
        $this->valueto = $valueto;
        return $this;
    }


}

