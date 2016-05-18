<?php

namespace Flowfact\Resources;

/**
 * Class representing GroupUsersType
 *
 *
 * XSD Type: groupUsersType
 */
class GroupUsersType extends LinkType
{

    /**
     * List of links pointing to users of the system.
     *
     * @property \Flowfact\Resources\LinkType[] $user
     */
    private $user = null;

    /**
     * Adds as user
     *
     * List of links pointing to users of the system.
     *
     * @return self
     * @param \Flowfact\Resources\LinkType $user
     */
    public function addToUser(\Flowfact\Resources\LinkType $user)
    {
        $this->user[] = $user;
        return $this;
    }

    /**
     * isset user
     *
     * List of links pointing to users of the system.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUser($index)
    {
        return isset($this->user[$index]);
    }

    /**
     * unset user
     *
     * List of links pointing to users of the system.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUser($index)
    {
        unset($this->user[$index]);
    }

    /**
     * Gets as user
     *
     * List of links pointing to users of the system.
     *
     * @return \Flowfact\Resources\LinkType[]
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * List of links pointing to users of the system.
     *
     * @param \Flowfact\Resources\LinkType[] $user
     * @return self
     */
    public function setUser(array $user)
    {
        $this->user = $user;
        return $this;
    }


}

