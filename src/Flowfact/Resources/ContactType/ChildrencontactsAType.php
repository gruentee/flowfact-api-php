<?php

namespace Flowfact\Resources\ContactType;

/**
 * Class representing ChildrencontactsAType
 */
class ChildrencontactsAType
{

    /**
     * @property \Flowfact\Resources\LinkType[] $contact
     */
    private $contact = null;

    /**
     * Adds as contact
     *
     * @return self
     * @param \Flowfact\Resources\LinkType $contact
     */
    public function addToContact(\Flowfact\Resources\LinkType $contact)
    {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * isset contact
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * @return \Flowfact\Resources\LinkType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \Flowfact\Resources\LinkType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

