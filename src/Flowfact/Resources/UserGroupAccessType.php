<?php

namespace Flowfact\Resources;

/**
 * Class representing UserGroupAccessType
 *
 *
 * XSD Type: userGroupAccessType
 */
class UserGroupAccessType extends AccessType
{

    /**
     * Contains a link to a valid usergroup which is subject to the rights.
     *
     * @property \Flowfact\Resources\LinkType $usergroup
     */
    private $usergroup = null;

    /**
     * Gets as usergroup
     *
     * Contains a link to a valid usergroup which is subject to the rights.
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getUsergroup()
    {
        return $this->usergroup;
    }

    /**
     * Sets a new usergroup
     *
     * Contains a link to a valid usergroup which is subject to the rights.
     *
     * @param \Flowfact\Resources\LinkType $usergroup
     * @return self
     */
    public function setUsergroup(\Flowfact\Resources\LinkType $usergroup)
    {
        $this->usergroup = $usergroup;
        return $this;
    }


}

