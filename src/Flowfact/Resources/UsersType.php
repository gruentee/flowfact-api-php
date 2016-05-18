<?php

namespace Flowfact\Resources;

/**
 * Class representing UsersType
 *
 *
 * XSD Type: usersType
 */
class UsersType
{

    /**
     * @property \Flowfact\Resources\UserType[] $user
     */
    private $user = null;

    /**
     * @property \Flowfact\Resources\UserShortType[] $usershort
     */
    private $usershort = null;

    /**
     * @property \Flowfact\Resources\LinkType $groups
     */
    private $groups = null;

    /**
     * Adds as user
     *
     * @return self
     * @param \Flowfact\Resources\UserType $user
     */
    public function addToUser(\Flowfact\Resources\UserType $user)
    {
        $this->user[] = $user;
        return $this;
    }

    /**
     * isset user
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
     * @return \Flowfact\Resources\UserType[]
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets a new user
     *
     * @param \Flowfact\Resources\UserType[] $user
     * @return self
     */
    public function setUser(array $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Adds as usershort
     *
     * @return self
     * @param \Flowfact\Resources\UserShortType $usershort
     */
    public function addToUsershort(\Flowfact\Resources\UserShortType $usershort)
    {
        $this->usershort[] = $usershort;
        return $this;
    }

    /**
     * isset usershort
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUsershort($index)
    {
        return isset($this->usershort[$index]);
    }

    /**
     * unset usershort
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUsershort($index)
    {
        unset($this->usershort[$index]);
    }

    /**
     * Gets as usershort
     *
     * @return \Flowfact\Resources\UserShortType[]
     */
    public function getUsershort()
    {
        return $this->usershort;
    }

    /**
     * Sets a new usershort
     *
     * @param \Flowfact\Resources\UserShortType[] $usershort
     * @return self
     */
    public function setUsershort(array $usershort)
    {
        $this->usershort = $usershort;
        return $this;
    }

    /**
     * Gets as groups
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Sets a new groups
     *
     * @param \Flowfact\Resources\LinkType $groups
     * @return self
     */
    public function setGroups(\Flowfact\Resources\LinkType $groups)
    {
        $this->groups = $groups;
        return $this;
    }


}

