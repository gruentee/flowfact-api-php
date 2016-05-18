<?php

namespace Flowfact\Resources;

/**
 * Class representing AccessListType
 *
 *
 * XSD Type: accessListType
 */
class AccessListType
{

    /**
     * @property \Flowfact\Resources\UserAccessType[] $useraccess
     */
    private $useraccess = null;

    /**
     * @property \Flowfact\Resources\UserGroupAccessType[] $usergroupaccess
     */
    private $usergroupaccess = null;

    /**
     * Although setting "READ" is the only logical value here (in order to set
     * "Everybody may Read the connected entity")
     *  you may also set "FULL" to the everybodyaccess, but it will result in removing
     * any access
     *  rights (because you gave everyone FULL Access).
     *  The (syntactically) correct way to remove any given ACL from an entity is to
     * perform an HTTP-DELETE to the 
     *  linked Access Control List-URL. This would set everyone to full rights.
     *
     * @property \Flowfact\Resources\AccessType $everybodyaccess
     */
    private $everybodyaccess = null;

    /**
     * Adds as useraccess
     *
     * @return self
     * @param \Flowfact\Resources\UserAccessType $useraccess
     */
    public function addToUseraccess(\Flowfact\Resources\UserAccessType $useraccess)
    {
        $this->useraccess[] = $useraccess;
        return $this;
    }

    /**
     * isset useraccess
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUseraccess($index)
    {
        return isset($this->useraccess[$index]);
    }

    /**
     * unset useraccess
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUseraccess($index)
    {
        unset($this->useraccess[$index]);
    }

    /**
     * Gets as useraccess
     *
     * @return \Flowfact\Resources\UserAccessType[]
     */
    public function getUseraccess()
    {
        return $this->useraccess;
    }

    /**
     * Sets a new useraccess
     *
     * @param \Flowfact\Resources\UserAccessType[] $useraccess
     * @return self
     */
    public function setUseraccess(array $useraccess)
    {
        $this->useraccess = $useraccess;
        return $this;
    }

    /**
     * Adds as usergroupaccess
     *
     * @return self
     * @param \Flowfact\Resources\UserGroupAccessType $usergroupaccess
     */
    public function addToUsergroupaccess(\Flowfact\Resources\UserGroupAccessType $usergroupaccess)
    {
        $this->usergroupaccess[] = $usergroupaccess;
        return $this;
    }

    /**
     * isset usergroupaccess
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUsergroupaccess($index)
    {
        return isset($this->usergroupaccess[$index]);
    }

    /**
     * unset usergroupaccess
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUsergroupaccess($index)
    {
        unset($this->usergroupaccess[$index]);
    }

    /**
     * Gets as usergroupaccess
     *
     * @return \Flowfact\Resources\UserGroupAccessType[]
     */
    public function getUsergroupaccess()
    {
        return $this->usergroupaccess;
    }

    /**
     * Sets a new usergroupaccess
     *
     * @param \Flowfact\Resources\UserGroupAccessType[] $usergroupaccess
     * @return self
     */
    public function setUsergroupaccess(array $usergroupaccess)
    {
        $this->usergroupaccess = $usergroupaccess;
        return $this;
    }

    /**
     * Gets as everybodyaccess
     *
     * Although setting "READ" is the only logical value here (in order to set
     * "Everybody may Read the connected entity")
     *  you may also set "FULL" to the everybodyaccess, but it will result in removing
     * any access
     *  rights (because you gave everyone FULL Access).
     *  The (syntactically) correct way to remove any given ACL from an entity is to
     * perform an HTTP-DELETE to the 
     *  linked Access Control List-URL. This would set everyone to full rights.
     *
     * @return \Flowfact\Resources\AccessType
     */
    public function getEverybodyaccess()
    {
        return $this->everybodyaccess;
    }

    /**
     * Sets a new everybodyaccess
     *
     * Although setting "READ" is the only logical value here (in order to set
     * "Everybody may Read the connected entity")
     *  you may also set "FULL" to the everybodyaccess, but it will result in removing
     * any access
     *  rights (because you gave everyone FULL Access).
     *  The (syntactically) correct way to remove any given ACL from an entity is to
     * perform an HTTP-DELETE to the 
     *  linked Access Control List-URL. This would set everyone to full rights.
     *
     * @param \Flowfact\Resources\AccessType $everybodyaccess
     * @return self
     */
    public function setEverybodyaccess(\Flowfact\Resources\AccessType $everybodyaccess)
    {
        $this->everybodyaccess = $everybodyaccess;
        return $this;
    }


}

