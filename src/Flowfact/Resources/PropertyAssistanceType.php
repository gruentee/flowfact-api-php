<?php

namespace Flowfact\Resources;

/**
 * Class representing PropertyAssistanceType
 *
 *
 * XSD Type: propertyAssistanceType
 */
class PropertyAssistanceType extends IdentifiableObjectWithModifiedAndCreatedType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $tradetype
     */
    private $tradetype = null;

    /**
     * @property \Flowfact\Resources\AvailabilityType $availability
     */
    private $availability = null;

    /**
     * @property string $note
     */
    private $note = null;

    /**
     * @property string $initialnote
     */
    private $initialnote = null;

    /**
     * @property string[] $groups
     */
    private $groups = null;

    /**
     * @property boolean $active
     */
    private $active = null;

    /**
     * @property \Flowfact\Resources\LinkType $blueprint
     */
    private $blueprint = null;

    /**
     * @property \Flowfact\Resources\LinkType $assignedproperties
     */
    private $assignedproperties = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

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
     * Gets as availability
     *
     * @return \Flowfact\Resources\AvailabilityType
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Sets a new availability
     *
     * @param \Flowfact\Resources\AvailabilityType $availability
     * @return self
     */
    public function setAvailability(\Flowfact\Resources\AvailabilityType $availability)
    {
        $this->availability = $availability;
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
     * Gets as initialnote
     *
     * @return string
     */
    public function getInitialnote()
    {
        return $this->initialnote;
    }

    /**
     * Sets a new initialnote
     *
     * @param string $initialnote
     * @return self
     */
    public function setInitialnote($initialnote)
    {
        $this->initialnote = $initialnote;
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
     * Gets as blueprint
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getBlueprint()
    {
        return $this->blueprint;
    }

    /**
     * Sets a new blueprint
     *
     * @param \Flowfact\Resources\LinkType $blueprint
     * @return self
     */
    public function setBlueprint(\Flowfact\Resources\LinkType $blueprint)
    {
        $this->blueprint = $blueprint;
        return $this;
    }

    /**
     * Gets as assignedproperties
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getAssignedproperties()
    {
        return $this->assignedproperties;
    }

    /**
     * Sets a new assignedproperties
     *
     * @param \Flowfact\Resources\LinkType $assignedproperties
     * @return self
     */
    public function setAssignedproperties(\Flowfact\Resources\LinkType $assignedproperties)
    {
        $this->assignedproperties = $assignedproperties;
        return $this;
    }


}

