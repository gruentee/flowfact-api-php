<?php

namespace Flowfact\Resources;

/**
 * Class representing UserType
 *
 *
 * XSD Type: userType
 */
class UserType extends UserShortType
{

    /**
     * @property boolean $active
     */
    private $active = null;

    /**
     * @property boolean $administrator
     */
    private $administrator = null;

    /**
     * @property \Flowfact\Resources\NumberType $mobile
     */
    private $mobile = null;

    /**
     * @property \Flowfact\Resources\NumberType $phone
     */
    private $phone = null;

    /**
     * @property \Flowfact\Resources\NumberType $fax
     */
    private $fax = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property string $position
     */
    private $position = null;

    /**
     * @property \Flowfact\Resources\LinkType $contact
     */
    private $contact = null;

    /**
     * @property \Flowfact\Resources\LinkType $picture
     */
    private $picture = null;

    /**
     * @property \Flowfact\Resources\IdlinkType $characteristic
     */
    private $characteristic = null;

    /**
     * @property string $login
     */
    private $login = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * Use these links to connect this user resource to structural neighbors of a user,
     * like contacts or activities.
     *
     * @property \Flowfact\Resources\LinkType[] $link
     */
    private $link = null;

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
     * Gets as administrator
     *
     * @return boolean
     */
    public function getAdministrator()
    {
        return $this->administrator;
    }

    /**
     * Sets a new administrator
     *
     * @param boolean $administrator
     * @return self
     */
    public function setAdministrator($administrator)
    {
        $this->administrator = $administrator;
        return $this;
    }

    /**
     * Gets as mobile
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets a new mobile
     *
     * @param \Flowfact\Resources\NumberType $mobile
     * @return self
     */
    public function setMobile(\Flowfact\Resources\NumberType $mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param \Flowfact\Resources\NumberType $phone
     * @return self
     */
    public function setPhone(\Flowfact\Resources\NumberType $phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param \Flowfact\Resources\NumberType $fax
     * @return self
     */
    public function setFax(\Flowfact\Resources\NumberType $fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Sets a new position
     *
     * @param string $position
     * @return self
     */
    public function setPosition($position)
    {
        $this->position = $position;
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
     * Gets as picture
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * @param \Flowfact\Resources\LinkType $picture
     * @return self
     */
    public function setPicture(\Flowfact\Resources\LinkType $picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Gets as characteristic
     *
     * @return \Flowfact\Resources\IdlinkType
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * Sets a new characteristic
     *
     * @param \Flowfact\Resources\IdlinkType $characteristic
     * @return self
     */
    public function setCharacteristic(\Flowfact\Resources\IdlinkType $characteristic)
    {
        $this->characteristic = $characteristic;
        return $this;
    }

    /**
     * Gets as login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets a new login
     *
     * @param string $login
     * @return self
     */
    public function setLogin($login)
    {
        $this->login = $login;
        return $this;
    }

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
     * Adds as link
     *
     * Use these links to connect this user resource to structural neighbors of a user,
     * like contacts or activities.
     *
     * @return self
     * @param \Flowfact\Resources\LinkType $link
     */
    public function addToLink(\Flowfact\Resources\LinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * Use these links to connect this user resource to structural neighbors of a user,
     * like contacts or activities.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * Use these links to connect this user resource to structural neighbors of a user,
     * like contacts or activities.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * Use these links to connect this user resource to structural neighbors of a user,
     * like contacts or activities.
     *
     * @return \Flowfact\Resources\LinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * Use these links to connect this user resource to structural neighbors of a user,
     * like contacts or activities.
     *
     * @param \Flowfact\Resources\LinkType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }


}

