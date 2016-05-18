<?php

namespace Flowfact\Resources;

/**
 * Class representing UserGroupShortType
 *
 *
 * XSD Type: userGroupShortType
 */
class UserGroupShortType extends LinkType
{

    /**
     * The amount of users which are members of this group.
     *
     * @property integer $usercount
     */
    private $usercount = null;

    /**
     * Gets as usercount
     *
     * The amount of users which are members of this group.
     *
     * @return integer
     */
    public function getUsercount()
    {
        return $this->usercount;
    }

    /**
     * Sets a new usercount
     *
     * The amount of users which are members of this group.
     *
     * @param integer $usercount
     * @return self
     */
    public function setUsercount($usercount)
    {
        $this->usercount = $usercount;
        return $this;
    }


}

