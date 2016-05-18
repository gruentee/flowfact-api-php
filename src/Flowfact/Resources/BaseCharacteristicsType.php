<?php

namespace Flowfact\Resources;

/**
 * Class representing BaseCharacteristicsType
 *
 *
 * XSD Type: baseCharacteristicsType
 */
class BaseCharacteristicsType extends IdentifiableObjectWithModifiedAndCreatedType
{

    /**
     * @property string $chartype
     */
    private $chartype = null;

    /**
     * @property \Flowfact\Resources\ColorsType $colors
     */
    private $colors = null;

    /**
     * Gets as chartype
     *
     * @return string
     */
    public function getChartype()
    {
        return $this->chartype;
    }

    /**
     * Sets a new chartype
     *
     * @param string $chartype
     * @return self
     */
    public function setChartype($chartype)
    {
        $this->chartype = $chartype;
        return $this;
    }

    /**
     * Gets as colors
     *
     * @return \Flowfact\Resources\ColorsType
     */
    public function getColors()
    {
        return $this->colors;
    }

    /**
     * Sets a new colors
     *
     * @param \Flowfact\Resources\ColorsType $colors
     * @return self
     */
    public function setColors(\Flowfact\Resources\ColorsType $colors)
    {
        $this->colors = $colors;
        return $this;
    }


}

