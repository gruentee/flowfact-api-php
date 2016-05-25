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
     * @property string|null $chartype
     */
    private $type = null;

    /**
     * @property \Flowfact\Resources\ColorsType $colors
     */
    private $colors = null;

    /**
     * Gets as chartype
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new chartype
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
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

