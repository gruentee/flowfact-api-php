<?php

namespace Flowfact\Resources;

/**
 * Class representing UserGroupsShortType
 *
 *
 * XSD Type: userGroupsShortType
 */
class UserGroupsShortType
{

    /**
     * @property \Flowfact\Resources\UserGroupShortType[] $usergroup
     */
    private $usergroup = null;

    /**
     * Adds as usergroup
     *
     * @return self
     * @param \Flowfact\Resources\UserGroupShortType $usergroup
     */
    public function addToUsergroup(\Flowfact\Resources\UserGroupShortType $usergroup)
    {
        $this->usergroup[] = $usergroup;
        return $this;
    }

    /**
     * isset usergroup
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUsergroup($index)
    {
        return isset($this->usergroup[$index]);
    }

    /**
     * unset usergroup
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUsergroup($index)
    {
        unset($this->usergroup[$index]);
    }

    /**
     * Gets as usergroup
     *
     * @return \Flowfact\Resources\UserGroupShortType[]
     */
    public function getUsergroup()
    {
        return $this->usergroup;
    }

    /**
     * Sets a new usergroup
     *
     * @param \Flowfact\Resources\UserGroupShortType[] $usergroup
     * @return self
     */
    public function setUsergroup(array $usergroup)
    {
        $this->usergroup = $usergroup;
        return $this;
    }


}

