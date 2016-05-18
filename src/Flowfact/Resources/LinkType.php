<?php

namespace Flowfact\Resources;

/**
 * Class representing LinkType
 *
 *
 * XSD Type: link
 */
class LinkType extends BaselinkType
{

    /**
     * @property string $rel
     */
    private $rel = null;

    /**
     * Gets as rel
     *
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * Sets a new rel
     *
     * @param string $rel
     * @return self
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
        return $this;
    }


}

