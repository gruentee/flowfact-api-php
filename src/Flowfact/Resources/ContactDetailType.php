<?php

namespace Flowfact\Resources;

/**
 * Class representing ContactDetailType
 *
 *
 * XSD Type: contactDetailType
 */
class ContactDetailType extends BaseBusinessObjectType
{

    /**
     * @property string $note
     */
    private $note = null;

    /**
     * This element has to be set when requesting the service. This is the way the
     * service knows
     *  how (for which contact) to process this message.
     *
     * @property \Flowfact\Resources\LinkType $contact
     */
    private $contact = null;

    /**
     * Describes which kind of propertyassistance is used by this contectdetail.
     *
     * @property \Flowfact\Resources\LinkType $origin
     */
    private $origin = null;

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
     * Gets as contact
     *
     * This element has to be set when requesting the service. This is the way the
     * service knows
     *  how (for which contact) to process this message.
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * This element has to be set when requesting the service. This is the way the
     * service knows
     *  how (for which contact) to process this message.
     *
     * @param \Flowfact\Resources\LinkType $contact
     * @return self
     */
    public function setContact(\Flowfact\Resources\LinkType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as origin
     *
     * Describes which kind of propertyassistance is used by this contectdetail.
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * Describes which kind of propertyassistance is used by this contectdetail.
     *
     * @param \Flowfact\Resources\LinkType $origin
     * @return self
     */
    public function setOrigin(\Flowfact\Resources\LinkType $origin)
    {
        $this->origin = $origin;
        return $this;
    }


}

