<?php

namespace Flowfact\Resources;

/**
 * Class representing BaseBusinessObjectWithTradeTypeAndOriginType
 *
 *
 * XSD Type: baseBusinessObjectWithTradeTypeAndOriginType
 */
class BaseBusinessObjectWithTradeTypeAndOriginType extends BaseBusinessObjectType
{

    /**
     * @property string $tradetype
     */
    private $tradetype = null;

    /**
     * Describes which kind of propertyassistance is used by this estate.
     *
     * @property \Flowfact\Resources\IdlinkType $origin
     */
    private $origin = null;

    /**
     * Gets as tradetype
     *
     * @return string
     */
    public function getTradetype()
    {
        return $this->tradetype;
    }

    /**
     * Sets a new tradetype
     *
     * @param string $tradetype
     * @return self
     */
    public function setTradetype($tradetype)
    {
        $this->tradetype = $tradetype;
        return $this;
    }

    /**
     * Gets as origin
     *
     * Describes which kind of propertyassistance is used by this estate.
     *
     * @return \Flowfact\Resources\IdlinkType
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * Describes which kind of propertyassistance is used by this estate.
     *
     * @param \Flowfact\Resources\IdlinkType $origin
     * @return self
     */
    public function setOrigin(\Flowfact\Resources\IdlinkType $origin)
    {
        $this->origin = $origin;
        return $this;
    }


}

