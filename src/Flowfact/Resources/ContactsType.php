<?php

namespace Flowfact\Resources;

/**
 * Class representing ContactsType
 *
 *
 * XSD Type: contactsType
 */
class ContactsType
{

    /**
     * @property \Flowfact\Resources\LinkType $first
     */
    private $first = null;

    /**
     * @property \Flowfact\Resources\LinkType $prev
     */
    private $prev = null;

    /**
     * @property \Flowfact\Resources\LinkType $next
     */
    private $next = null;

    /**
     * @property \Flowfact\Resources\LinkType $last
     */
    private $last = null;

    /**
     * @property integer $total
     */
    private $total = null;

    /**
     * @property \Flowfact\Resources\ContactShortType[] $contactshort
     */
    private $contactshort = null;

    /**
     * @property \Flowfact\Resources\ContactType[] $contact
     */
    private $contact = null;

    /**
     * Gets as first
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * Sets a new first
     *
     * @param \Flowfact\Resources\LinkType $first
     * @return self
     */
    public function setFirst(\Flowfact\Resources\LinkType $first)
    {
        $this->first = $first;
        return $this;
    }

    /**
     * Gets as prev
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getPrev()
    {
        return $this->prev;
    }

    /**
     * Sets a new prev
     *
     * @param \Flowfact\Resources\LinkType $prev
     * @return self
     */
    public function setPrev(\Flowfact\Resources\LinkType $prev)
    {
        $this->prev = $prev;
        return $this;
    }

    /**
     * Gets as next
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * Sets a new next
     *
     * @param \Flowfact\Resources\LinkType $next
     * @return self
     */
    public function setNext(\Flowfact\Resources\LinkType $next)
    {
        $this->next = $next;
        return $this;
    }

    /**
     * Gets as last
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * Sets a new last
     *
     * @param \Flowfact\Resources\LinkType $last
     * @return self
     */
    public function setLast(\Flowfact\Resources\LinkType $last)
    {
        $this->last = $last;
        return $this;
    }

    /**
     * Gets as total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * @param integer $total
     * @return self
     */
    public function setTotal($total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Adds as contactshort
     *
     * @return self
     * @param \Flowfact\Resources\ContactShortType $contactshort
     */
    public function addToContactshort(\Flowfact\Resources\ContactShortType $contactshort)
    {
        $this->contactshort[] = $contactshort;
        return $this;
    }

    /**
     * isset contactshort
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactshort($index)
    {
        return isset($this->contactshort[$index]);
    }

    /**
     * unset contactshort
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactshort($index)
    {
        unset($this->contactshort[$index]);
    }

    /**
     * Gets as contactshort
     *
     * @return \Flowfact\Resources\ContactShortType[]
     */
    public function getContactshort()
    {
        return $this->contactshort;
    }

    /**
     * Sets a new contactshort
     *
     * @param \Flowfact\Resources\ContactShortType[] $contactshort
     * @return self
     */
    public function setContactshort(array $contactshort)
    {
        $this->contactshort = $contactshort;
        return $this;
    }

    /**
     * Adds as contact
     *
     * @return self
     * @param \Flowfact\Resources\ContactType $contact
     */
    public function addToContact(\Flowfact\Resources\ContactType $contact)
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
     * @return \Flowfact\Resources\ContactType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * @param \Flowfact\Resources\ContactType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;
        return $this;
    }


}

