<?php

namespace Flowfact\Resources;

/**
 * Class representing IdentifiableObjectWithModifiedAndCreatedType
 *
 *
 * XSD Type: identifiableObjectWithModifiedAndCreatedType
 */
class IdentifiableObjectWithModifiedAndCreatedType extends LinkType
{

    /**
     * This value is ready-only and generated by the server. If the client decides
     *  to set or reset this value during or after the creation of this element, it is
     *  ignored by the server.
     *
     * @property string $id
     */
    private $id = null;

    /**
     * Read-Only field, set by the server.
     *
     * @property \DateTime $created
     */
    private $created = null;

    /**
     * Read-Only field, set by the server.
     *
     * @property \DateTime $modified
     */
    private $modified = null;

    /**
     * Gets as id
     *
     * This value is ready-only and generated by the server. If the client decides
     *  to set or reset this value during or after the creation of this element, it is
     *  ignored by the server.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * This value is ready-only and generated by the server. If the client decides
     *  to set or reset this value during or after the creation of this element, it is
     *  ignored by the server.
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as created
     *
     * Read-Only field, set by the server.
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Sets a new created
     *
     * Read-Only field, set by the server.
     *
     * @param \DateTime $created
     * @return self
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Gets as modified
     *
     * Read-Only field, set by the server.
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Sets a new modified
     *
     * Read-Only field, set by the server.
     *
     * @param \DateTime $modified
     * @return self
     */
    public function setModified(\DateTime $modified)
    {
        $this->modified = $modified;
        return $this;
    }


}
