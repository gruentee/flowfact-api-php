<?php

namespace Flowfact\Resources;

/**
 * Class representing SalutationType
 *
 *
 * XSD Type: salutationType
 */
class SalutationType
{

    /**
     * Valid values are provided by the service. Please refer to the documentation in
     * order to get to know valid values! If you are
     *  supplying an invalid value, you will receive an Error 400: Bad Request! When
     * you are tempering with salutations, you always 
     *  have to supply this field to the service, even if you are not changing it (if
     * you are just interested in changing the letter
     *  salutation for instance).
     *
     * @property string $short
     */
    private $short = null;

    /**
     * @property string $long
     */
    private $long = null;

    /**
     * @property string $letter
     */
    private $letter = null;

    /**
     * Gets as short
     *
     * Valid values are provided by the service. Please refer to the documentation in
     * order to get to know valid values! If you are
     *  supplying an invalid value, you will receive an Error 400: Bad Request! When
     * you are tempering with salutations, you always 
     *  have to supply this field to the service, even if you are not changing it (if
     * you are just interested in changing the letter
     *  salutation for instance).
     *
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Sets a new short
     *
     * Valid values are provided by the service. Please refer to the documentation in
     * order to get to know valid values! If you are
     *  supplying an invalid value, you will receive an Error 400: Bad Request! When
     * you are tempering with salutations, you always 
     *  have to supply this field to the service, even if you are not changing it (if
     * you are just interested in changing the letter
     *  salutation for instance).
     *
     * @param string $short
     * @return self
     */
    public function setShort($short)
    {
        $this->short = $short;
        return $this;
    }

    /**
     * Gets as long
     *
     * @return string
     */
    public function getLong()
    {
        return $this->long;
    }

    /**
     * Sets a new long
     *
     * @param string $long
     * @return self
     */
    public function setLong($long)
    {
        $this->long = $long;
        return $this;
    }

    /**
     * Gets as letter
     *
     * @return string
     */
    public function getLetter()
    {
        return $this->letter;
    }

    /**
     * Sets a new letter
     *
     * @param string $letter
     * @return self
     */
    public function setLetter($letter)
    {
        $this->letter = $letter;
        return $this;
    }


}

