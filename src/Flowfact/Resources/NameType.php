<?php

namespace Flowfact\Resources;

/**
 * Class representing NameType
 *
 *
 * XSD Type: nameType
 */
class NameType
{

    /**
     * @property string $lastname
     */
    private $lastname = null;

    /**
     * @property string $title
     */
    private $title = null;

    /**
     * @property string $firstname
     */
    private $firstname = null;

    /**
     * Gets as lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Sets a new lastname
     *
     * @param string $lastname
     * @return self
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Gets as firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Sets a new firstname
     *
     * @param string $firstname
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }


}

