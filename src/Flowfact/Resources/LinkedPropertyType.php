<?php

namespace Flowfact\Resources;

/**
 * Class representing LinkedPropertyType
 *
 *
 * XSD Type: linkedPropertyType
 */
class LinkedPropertyType extends LinkType
{

    /**
     * @property boolean $mandatory
     */
    private $mandatory = null;

    /**
     * @property string $filter
     */
    private $filter = null;

    /**
     * @property string $color
     */
    private $color = null;

    /**
     * @property \Flowfact\Resources\AccessListType $accesslist
     */
    private $accesslist = null;

    /**
     * @property integer $propertyType
     */
    private $propertyType = null;

    /**
     * @property boolean $interval
     */
    private $interval = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $unit
     */
    private $unit = null;

    /**
     * @property string[] $groups
     */
    private $groups = null;

    /**
     * Gets as mandatory
     *
     * @return boolean
     */
    public function getMandatory()
    {
        return $this->mandatory;
    }

    /**
     * Sets a new mandatory
     *
     * @param boolean $mandatory
     * @return self
     */
    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
        return $this;
    }

    /**
     * Gets as filter
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * @param string $filter
     * @return self
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * Gets as color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Sets a new color
     *
     * @param string $color
     * @return self
     */
    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    /**
     * Gets as accesslist
     *
     * @return \Flowfact\Resources\AccessListType
     */
    public function getAccesslist()
    {
        return $this->accesslist;
    }

    /**
     * Sets a new accesslist
     *
     * @param \Flowfact\Resources\AccessListType $accesslist
     * @return self
     */
    public function setAccesslist(\Flowfact\Resources\AccessListType $accesslist)
    {
        $this->accesslist = $accesslist;
        return $this;
    }

    /**
     * Gets as propertyType
     *
     * @return integer
     */
    public function getPropertyType()
    {
        return $this->propertyType;
    }

    /**
     * Sets a new propertyType
     *
     * @param integer $propertyType
     * @return self
     */
    public function setPropertyType($propertyType)
    {
        $this->propertyType = $propertyType;
        return $this;
    }

    /**
     * Gets as interval
     *
     * @return boolean
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets a new interval
     *
     * @param boolean $interval
     * @return self
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
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
     * Gets as unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Sets a new unit
     *
     * @param string $unit
     * @return self
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
        return $this;
    }

    /**
     * Adds as groups
     *
     * @return self
     * @param string $groups
     */
    public function addToGroups($groups)
    {
        $this->groups[] = $groups;
        return $this;
    }

    /**
     * isset groups
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGroups($index)
    {
        return isset($this->groups[$index]);
    }

    /**
     * unset groups
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGroups($index)
    {
        unset($this->groups[$index]);
    }

    /**
     * Gets as groups
     *
     * @return string[]
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Sets a new groups
     *
     * @param string[] $groups
     * @return self
     */
    public function setGroups(array $groups)
    {
        $this->groups = $groups;
        return $this;
    }


}

