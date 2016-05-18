<?php

namespace Flowfact\Resources;

/**
 * Class representing UserGroupType
 *
 *
 * XSD Type: userGroupType
 */
class UserGroupType extends LinkType
{

    /**
     * Points to the list of users which are members of this group.
     *
     * @property \Flowfact\Resources\LinkType $users
     */
    private $users = null;

    /**
     * Gets as users
     *
     * Points to the list of users which are members of this group.
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets a new users
     *
     * Points to the list of users which are members of this group.
     *
     * @param \Flowfact\Resources\LinkType $users
     * @return self
     */
    public function setUsers(\Flowfact\Resources\LinkType $users)
    {
        $this->users = $users;
        return $this;
    }


}

