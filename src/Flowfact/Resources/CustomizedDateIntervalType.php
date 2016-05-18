<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedDateIntervalType
 *
 *
 * XSD Type: CustomizedDateIntervalType
 */
class CustomizedDateIntervalType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Not inhabited").
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Defines the minimum value (e.g. 2010-01-01).
     *
     * @property \DateTime $valuefrom
     */
    private $valuefrom = null;

    /**
     * Defines the maximum value (e.g. 2012-03-01).
     *
     * @property \DateTime $valueto
     */
    private $valueto = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $formattedValuefrom
     */
    private $formattedValuefrom = null;

    /**
     * @property string $formattedValueto
     */
    private $formattedValueto = null;

    /**
     * Gets as name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Not inhabited").
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
     *  represents (e.g. "Not inhabited").
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
     * Defines the minimum value (e.g. 2010-01-01).
     *
     * @return \DateTime
     */
    public function getValuefrom()
    {
        return $this->valuefrom;
    }

    /**
     * Sets a new valuefrom
     *
     * Defines the minimum value (e.g. 2010-01-01).
     *
     * @param \DateTime $valuefrom
     * @return self
     */
    public function setValuefrom(\DateTime $valuefrom)
    {
        $this->valuefrom = $valuefrom;
        return $this;
    }

    /**
     * Gets as valueto
     *
     * Defines the maximum value (e.g. 2012-03-01).
     *
     * @return \DateTime
     */
    public function getValueto()
    {
        return $this->valueto;
    }

    /**
     * Sets a new valueto
     *
     * Defines the maximum value (e.g. 2012-03-01).
     *
     * @param \DateTime $valueto
     * @return self
     */
    public function setValueto(\DateTime $valueto)
    {
        $this->valueto = $valueto;
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
     * Gets as formattedValuefrom
     *
     * @return string
     */
    public function getFormattedValuefrom()
    {
        return $this->formattedValuefrom;
    }

    /**
     * Sets a new formattedValuefrom
     *
     * @param string $formattedValuefrom
     * @return self
     */
    public function setFormattedValuefrom($formattedValuefrom)
    {
        $this->formattedValuefrom = $formattedValuefrom;
        return $this;
    }

    /**
     * Gets as formattedValueto
     *
     * @return string
     */
    public function getFormattedValueto()
    {
        return $this->formattedValueto;
    }

    /**
     * Sets a new formattedValueto
     *
     * @param string $formattedValueto
     * @return self
     */
    public function setFormattedValueto($formattedValueto)
    {
        $this->formattedValueto = $formattedValueto;
        return $this;
    }


}

