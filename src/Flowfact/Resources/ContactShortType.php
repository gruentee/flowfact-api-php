<?php

namespace Flowfact\Resources;

/**
 * Class representing ContactShortType
 *
 *
 * XSD Type: contactShortType
 */
class ContactShortType extends BaseBusinessObjectType
{

    /**
     * @property \Flowfact\Resources\NameType $name
     */
    private $name = null;

    /**
     * @property \Flowfact\Resources\NameType $additionalname
     */
    private $additionalname = null;

    /**
     * @property string $company
     */
    private $company = null;

    /**
     * @property \Flowfact\Resources\LocationType $location
     */
    private $location = null;

    /**
     * @property \Flowfact\Resources\VersionedLinkType $picture
     */
    private $picture = null;

    /**
     * @property string $relationType
     */
    private $relationType = null;

    /**
     * Gets as name
     *
     * @return \Flowfact\Resources\NameType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param \Flowfact\Resources\NameType $name
     * @return self
     */
    public function setName(\Flowfact\Resources\NameType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as additionalname
     *
     * @return \Flowfact\Resources\NameType
     */
    public function getAdditionalname()
    {
        return $this->additionalname;
    }

    /**
     * Sets a new additionalname
     *
     * @param \Flowfact\Resources\NameType $additionalname
     * @return self
     */
    public function setAdditionalname(\Flowfact\Resources\NameType $additionalname)
    {
        $this->additionalname = $additionalname;
        return $this;
    }

    /**
     * Gets as company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
        return $this;
    }

    /**
     * Gets as location
     *
     * @return \Flowfact\Resources\LocationType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * @param \Flowfact\Resources\LocationType $location
     * @return self
     */
    public function setLocation(\Flowfact\Resources\LocationType $location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Gets as picture
     *
     * @return \Flowfact\Resources\VersionedLinkType
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * @param \Flowfact\Resources\VersionedLinkType $picture
     * @return self
     */
    public function setPicture(\Flowfact\Resources\VersionedLinkType $picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Gets as relationType
     *
     * @return string
     */
    public function getRelationType()
    {
        return $this->relationType;
    }

    /**
     * Sets a new relationType
     *
     * @param string $relationType
     * @return self
     */
    public function setRelationType($relationType)
    {
        $this->relationType = $relationType;
        return $this;
    }


}

