<?php

namespace Flowfact\Resources;

/**
 * Class representing UserAccessType
 *
 *
 * XSD Type: userAccessType
 */
class UserAccessType extends AccessType
{

    /**
     * Contains a link to a valid user which is subject to the rights.
     *
     * @property \Flowfact\Resources\LinkType $user
     */
    private $user = null;

    /**
     * Gets as user
     *
     * Contains a link to a valid user which is subject to the rights.
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
     * Contains a link to a valid user which is subject to the rights.
     *
     * @param \Flowfact\Resources\LinkType $user
     * @return self
     */
    public function setUser(\Flowfact\Resources\LinkType $user)
    {
        $this->user = $user;
        return $this;
    }


}

