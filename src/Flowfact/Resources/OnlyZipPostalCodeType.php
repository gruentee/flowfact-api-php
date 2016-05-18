<?php

namespace Flowfact\Resources;

/**
 * Class representing OnlyZipPostalCodeType
 *
 *
 * XSD Type: onlyZipPostalCodeType
 */
class OnlyZipPostalCodeType
{

    /**
     * @property string $postalcode
     */
    private $postalcode = null;

    /**
     * Gets as postalcode
     *
     * @return string
     */
    public function getPostalcode()
    {
        return $this->postalcode;
    }

    /**
     * Sets a new postalcode
     *
     * @param string $postalcode
     * @return self
     */
    public function setPostalcode($postalcode)
    {
        $this->postalcode = $postalcode;
        return $this;
    }


}

