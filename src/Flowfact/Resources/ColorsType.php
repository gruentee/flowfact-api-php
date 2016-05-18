<?php

namespace Flowfact\Resources;

/**
 * Class representing ColorsType
 *
 *
 * XSD Type: colorsType
 */
class ColorsType
{

    /**
     * This value is given as an RGB value.
     *
     * @property string $fgcolor
     */
    private $fgcolor = null;

    /**
     * This value is given as an RGB value.
     *
     * @property string $bgcolor
     */
    private $bgcolor = null;

    /**
     * Gets as fgcolor
     *
     * This value is given as an RGB value.
     *
     * @return string
     */
    public function getFgcolor()
    {
        return $this->fgcolor;
    }

    /**
     * Sets a new fgcolor
     *
     * This value is given as an RGB value.
     *
     * @param string $fgcolor
     * @return self
     */
    public function setFgcolor($fgcolor)
    {
        $this->fgcolor = $fgcolor;
        return $this;
    }

    /**
     * Gets as bgcolor
     *
     * This value is given as an RGB value.
     *
     * @return string
     */
    public function getBgcolor()
    {
        return $this->bgcolor;
    }

    /**
     * Sets a new bgcolor
     *
     * This value is given as an RGB value.
     *
     * @param string $bgcolor
     * @return self
     */
    public function setBgcolor($bgcolor)
    {
        $this->bgcolor = $bgcolor;
        return $this;
    }


}

