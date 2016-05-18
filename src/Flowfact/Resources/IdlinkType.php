<?php

namespace Flowfact\Resources;

/**
 * Class representing IdlinkType
 *
 *
 * XSD Type: idlink
 */
class IdlinkType extends LinkType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Gets as id
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
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }


}

