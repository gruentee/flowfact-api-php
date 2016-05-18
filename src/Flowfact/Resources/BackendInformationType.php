<?php

namespace Flowfact\Resources;

/**
 * Class representing BackendInformationType
 *
 *
 * XSD Type: backendInformationType
 */
class BackendInformationType
{

    /**
     * @property string $mode
     */
    private $mode = null;

    /**
     * Gets as mode
     *
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Sets a new mode
     *
     * @param string $mode
     * @return self
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }


}

