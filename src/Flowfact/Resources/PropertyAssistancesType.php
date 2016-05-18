<?php

namespace Flowfact\Resources;

/**
 * Class representing PropertyAssistancesType
 *
 *
 * XSD Type: propertyAssistancesType
 */
class PropertyAssistancesType
{

    /**
     * @property \Flowfact\Resources\PropertyAssistanceType[] $propertyassistance
     */
    private $propertyassistance = null;

    /**
     * Adds as propertyassistance
     *
     * @return self
     * @param \Flowfact\Resources\PropertyAssistanceType $propertyassistance
     */
    public function addToPropertyassistance(\Flowfact\Resources\PropertyAssistanceType $propertyassistance)
    {
        $this->propertyassistance[] = $propertyassistance;
        return $this;
    }

    /**
     * isset propertyassistance
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPropertyassistance($index)
    {
        return isset($this->propertyassistance[$index]);
    }

    /**
     * unset propertyassistance
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPropertyassistance($index)
    {
        unset($this->propertyassistance[$index]);
    }

    /**
     * Gets as propertyassistance
     *
     * @return \Flowfact\Resources\PropertyAssistanceType[]
     */
    public function getPropertyassistance()
    {
        return $this->propertyassistance;
    }

    /**
     * Sets a new propertyassistance
     *
     * @param \Flowfact\Resources\PropertyAssistanceType[] $propertyassistance
     * @return self
     */
    public function setPropertyassistance(array $propertyassistance)
    {
        $this->propertyassistance = $propertyassistance;
        return $this;
    }


}

