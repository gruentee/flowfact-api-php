<?php

namespace Flowfact\Resources;

/**
 * Class representing PropertyType
 *
 *
 * XSD Type: propertyType
 */
class PropertyType extends BaseBusinessObjectType
{

    /**
     * @property boolean $active
     */
    private $active = null;

    /**
     * @property string $tagname
     */
    private $tagname = null;

    /**
     * @property string $note
     */
    private $note = null;

    /**
     * @property string $plausibility
     */
    private $plausibility = null;

    /**
     * @property string $exposelabel
     */
    private $exposelabel = null;

    /**
     * @property string $sorting
     */
    private $sorting = null;

    /**
     * @property string $format
     */
    private $format = null;

    /**
     * @property string $formula
     */
    private $formula = null;

    /**
     * @property boolean $selectionrelevant
     */
    private $selectionrelevant = null;

    /**
     * @property boolean $interval
     */
    private $interval = null;

    /**
     * @property boolean $musthavepreselect
     */
    private $musthavepreselect = null;

    /**
     * @property integer $weightingpreselect
     */
    private $weightingpreselect = null;

    /**
     * @property string[] $groups
     */
    private $groups = null;

    /**
     * @property \Flowfact\Resources\PropertyAvailabilityType $availability
     */
    private $availability = null;

    /**
     * Gets as active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param boolean $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as tagname
     *
     * @return string
     */
    public function getTagname()
    {
        return $this->tagname;
    }

    /**
     * Sets a new tagname
     *
     * @param string $tagname
     * @return self
     */
    public function setTagname($tagname)
    {
        $this->tagname = $tagname;
        return $this;
    }

    /**
     * Gets as note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * Gets as plausibility
     *
     * @return string
     */
    public function getPlausibility()
    {
        return $this->plausibility;
    }

    /**
     * Sets a new plausibility
     *
     * @param string $plausibility
     * @return self
     */
    public function setPlausibility($plausibility)
    {
        $this->plausibility = $plausibility;
        return $this;
    }

    /**
     * Gets as exposelabel
     *
     * @return string
     */
    public function getExposelabel()
    {
        return $this->exposelabel;
    }

    /**
     * Sets a new exposelabel
     *
     * @param string $exposelabel
     * @return self
     */
    public function setExposelabel($exposelabel)
    {
        $this->exposelabel = $exposelabel;
        return $this;
    }

    /**
     * Gets as sorting
     *
     * @return string
     */
    public function getSorting()
    {
        return $this->sorting;
    }

    /**
     * Sets a new sorting
     *
     * @param string $sorting
     * @return self
     */
    public function setSorting($sorting)
    {
        $this->sorting = $sorting;
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
     * Gets as formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Sets a new formula
     *
     * @param string $formula
     * @return self
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;
        return $this;
    }

    /**
     * Gets as selectionrelevant
     *
     * @return boolean
     */
    public function getSelectionrelevant()
    {
        return $this->selectionrelevant;
    }

    /**
     * Sets a new selectionrelevant
     *
     * @param boolean $selectionrelevant
     * @return self
     */
    public function setSelectionrelevant($selectionrelevant)
    {
        $this->selectionrelevant = $selectionrelevant;
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
     * Gets as musthavepreselect
     *
     * @return boolean
     */
    public function getMusthavepreselect()
    {
        return $this->musthavepreselect;
    }

    /**
     * Sets a new musthavepreselect
     *
     * @param boolean $musthavepreselect
     * @return self
     */
    public function setMusthavepreselect($musthavepreselect)
    {
        $this->musthavepreselect = $musthavepreselect;
        return $this;
    }

    /**
     * Gets as weightingpreselect
     *
     * @return integer
     */
    public function getWeightingpreselect()
    {
        return $this->weightingpreselect;
    }

    /**
     * Sets a new weightingpreselect
     *
     * @param integer $weightingpreselect
     * @return self
     */
    public function setWeightingpreselect($weightingpreselect)
    {
        $this->weightingpreselect = $weightingpreselect;
        return $this;
    }

    /**
     * Adds as group
     *
     * @return self
     * @param string $group
     */
    public function addToGroups($group)
    {
        $this->groups[] = $group;
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

    /**
     * Gets as availability
     *
     * @return \Flowfact\Resources\PropertyAvailabilityType
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * @param \Flowfact\Resources\PropertyAvailabilityType $availability
     * @return self
     */
    public function setAvailability(\Flowfact\Resources\PropertyAvailabilityType $availability)
    {
        $this->availability = $availability;
        return $this;
    }


}

