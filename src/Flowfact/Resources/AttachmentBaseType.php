<?php

namespace Flowfact\Resources;

/**
 * Class representing AttachmentBaseType
 *
 *
 * XSD Type: attachmentBaseType
 */
class AttachmentBaseType extends LinkType
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
     * @property string $name
     */
    private $name = null;

    /**
     * @property integer $filesize
     */
    private $filesize = null;

    /**
     * @property \Flowfact\Resources\LinkType $placeholder
     */
    private $placeholder = null;

    /**
     * @property \DateTime $created
     */
    private $created = null;

    /**
     * @property \DateTime $modified
     */
    private $modified = null;

    /**
     * Follow this link to down or upload the binary.
     *
     * @property \Flowfact\Resources\LinkType $file
     */
    private $file = null;

    /**
     * @property string $filetype
     */
    private $filetype = null;

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
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as filesize
     *
     * @return integer
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     * Sets a new filesize
     *
     * @param integer $filesize
     * @return self
     */
    public function setFilesize($filesize)
    {
        $this->filesize = $filesize;
        return $this;
    }

    /**
     * Gets as placeholder
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * Sets a new placeholder
     *
     * @param \Flowfact\Resources\LinkType $placeholder
     * @return self
     */
    public function setPlaceholder(\Flowfact\Resources\LinkType $placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * Gets as created
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
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Sets a new modified
     *
     * @param \DateTime $modified
     * @return self
     */
    public function setModified(\DateTime $modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * Gets as file
     *
     * Follow this link to down or upload the binary.
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * Follow this link to down or upload the binary.
     *
     * @param \Flowfact\Resources\LinkType $file
     * @return self
     */
    public function setFile(\Flowfact\Resources\LinkType $file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Gets as filetype
     *
     * @return string
     */
    public function getFiletype()
    {
        return $this->filetype;
    }

    /**
     * Sets a new filetype
     *
     * @param string $filetype
     * @return self
     */
    public function setFiletype($filetype)
    {
        $this->filetype = $filetype;
        return $this;
    }


}
