<?php

namespace Flowfact\Resources;

/**
 * Class representing CharacteristicType
 *
 *
 * XSD Type: characteristicType
 */
class CharacteristicType extends BaseCharacteristicsType
{

    /**
     * @property \Flowfact\Resources\LinkType $user
     */
    private $user = null;

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property boolean $active
     */
    private $active = null;

    /**
     * @property string $shortname
     */
    private $shortname = null;

    /**
     * @property string $grouppath
     */
    private $grouppath = null;

    /**
     * Gets as user
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \Flowfact\Resources\LinkType $user
     * @return self
     */
    public function setUser(\Flowfact\Resources\LinkType $user)
    {
        $this->user = $user;
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
     * Gets as shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }

    /**
     * Sets a new shortname
     *
     * @param string $shortname
     * @return self
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;
        return $this;
    }

    /**
     * Gets as grouppath
     *
     * @return string
     */
    public function getGrouppath()
    {
        return $this->grouppath;
    }

    /**
     * Sets a new grouppath
     *
     * @param string $grouppath
     * @return self
     */
    public function setGrouppath($grouppath)
    {
        $this->grouppath = $grouppath;
        return $this;
    }


}

