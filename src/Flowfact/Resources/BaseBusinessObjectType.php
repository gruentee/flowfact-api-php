<?php

namespace Flowfact\Resources;

/**
 * Class representing BaseBusinessObjectType
 *
 *
 * XSD Type: baseBusinessObjectType
 */
class BaseBusinessObjectType extends IdentifiableObjectWithModifiedAndCreatedType
{

    /**
     * Field indicates whether the user, that requested this entity, is allowed to
     * change it.
     *  This "information in advance" avoids unnecessary calls to the service who would
     * deny
     *  editing the entity anyway. Remember: This field is only a snapshot of the
     * current
     *  settings and may change over time. This attribute is not directly changeable!
     *
     * @property boolean $readonly
     */
    private $readonly = null;

    /**
     * @property \Flowfact\Resources\LinkType $modifier
     */
    private $modifier = null;

    /**
     * @property \Flowfact\Resources\LinkType $creator
     */
    private $creator = null;

    /**
     * @property \Flowfact\Resources\LinkType $owner
     */
    private $owner = null;

    /**
     * @property boolean $archived
     */
    private $archived = null;

    /**
     * @property \Flowfact\Resources\CharacteristicsUrlType $characteristics
     */
    private $characteristics = null;

    /**
     * @property \Flowfact\Resources\AccessListType $accesslist
     */
    private $accesslist = null;

    /**
     * Gets as readonly
     *
     * Field indicates whether the user, that requested this entity, is allowed to
     * change it.
     *  This "information in advance" avoids unnecessary calls to the service who would
     * deny
     *  editing the entity anyway. Remember: This field is only a snapshot of the
     * current
     *  settings and may change over time. This attribute is not directly changeable!
     *
     * @return boolean
     */
    public function getReadonly()
    {
        return $this->readonly;
    }

    /**
     * Sets a new readonly
     *
     * Field indicates whether the user, that requested this entity, is allowed to
     * change it.
     *  This "information in advance" avoids unnecessary calls to the service who would
     * deny
     *  editing the entity anyway. Remember: This field is only a snapshot of the
     * current
     *  settings and may change over time. This attribute is not directly changeable!
     *
     * @param boolean $readonly
     * @return self
     */
    public function setReadonly($readonly)
    {
        $this->readonly = $readonly;
        return $this;
    }

    /**
     * Gets as modifier
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getModifier()
    {
        return $this->modifier;
    }

    /**
     * Sets a new modifier
     *
     * @param \Flowfact\Resources\LinkType $modifier
     * @return self
     */
    public function setModifier(\Flowfact\Resources\LinkType $modifier)
    {
        $this->modifier = $modifier;
        return $this;
    }

    /**
     * Gets as creator
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Sets a new creator
     *
     * @param \Flowfact\Resources\LinkType $creator
     * @return self
     */
    public function setCreator(\Flowfact\Resources\LinkType $creator)
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * Gets as owner
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Sets a new owner
     *
     * @param \Flowfact\Resources\LinkType $owner
     * @return self
     */
    public function setOwner(\Flowfact\Resources\LinkType $owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     * Gets as archived
     *
     * @return boolean
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Sets a new archived
     *
     * @param boolean $archived
     * @return self
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
        return $this;
    }

    /**
     * Gets as characteristics
     *
     * @return \Flowfact\Resources\CharacteristicsUrlType
     */
    public function getCharacteristics()
    {
        return $this->characteristics;
    }

    /**
     * Sets a new characteristics
     *
     * @param \Flowfact\Resources\CharacteristicsUrlType $characteristics
     * @return self
     */
    public function setCharacteristics(\Flowfact\Resources\CharacteristicsUrlType $characteristics)
    {
        $this->characteristics = $characteristics;
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


}

