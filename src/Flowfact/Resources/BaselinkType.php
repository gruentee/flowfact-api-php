<?php

namespace Flowfact\Resources;

/**
 * Class representing BaselinkType
 *
 *
 * XSD Type: baselink
 */
class BaselinkType
{

    /**
     * @property string $href
     */
    private $href = null;

    /**
     * @property string|null $type
     */
    private $type = null;

    /**
     * Gets as href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets a new href
     *
     * @param string $href
     * @return self
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string|null $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


}

