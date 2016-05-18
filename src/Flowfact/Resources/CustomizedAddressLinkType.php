<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedAddressLinkType
 *
 *
 * XSD Type: CustomizedAddressLinkType
 */
class CustomizedAddressLinkType extends BaseCustomizedType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \Flowfact\Resources\LinkType $contact
     */
    private $contact = null;

    /**
     * @property string $formattedValue
     */
    private $formattedValue = null;

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
     * Gets as contact
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
     * @param \Flowfact\Resources\LinkType $contact
     * @return self
     */
    public function setContact(\Flowfact\Resources\LinkType $contact)
    {
        $this->contact = $contact;
        return $this;
    }

    /**
     * Gets as formattedValue
     *
     * @return string
     */
    public function getFormattedValue()
    {
        return $this->formattedValue;
    }

    /**
     * Sets a new formattedValue
     *
     * @param string $formattedValue
     * @return self
     */
    public function setFormattedValue($formattedValue)
    {
        $this->formattedValue = $formattedValue;
        return $this;
    }


}

