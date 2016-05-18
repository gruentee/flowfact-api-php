<?php

namespace Flowfact\Resources\CustomizedCityLocationIntervalType;

/**
 * Class representing PostalcodeIntervalAType
 */
class PostalcodeIntervalAType
{

    /**
     * @property \Flowfact\Resources\PostalCodeType $from
     */
    private $from = null;

    /**
     * @property \Flowfact\Resources\OnlyZipPostalCodeType $to
     */
    private $to = null;

    /**
     * Gets as from
     *
     * @return \Flowfact\Resources\PostalCodeType
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Sets a new from
     *
     * @param \Flowfact\Resources\PostalCodeType $from
     * @return self
     */
    public function setFrom(\Flowfact\Resources\PostalCodeType $from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Gets as to
     *
     * @return \Flowfact\Resources\OnlyZipPostalCodeType
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Sets a new to
     *
     * @param \Flowfact\Resources\OnlyZipPostalCodeType $to
     * @return self
     */
    public function setTo(\Flowfact\Resources\OnlyZipPostalCodeType $to)
    {
        $this->to = $to;
        return $this;
    }


}

