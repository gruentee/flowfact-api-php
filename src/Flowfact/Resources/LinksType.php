<?php

namespace Flowfact\Resources;

/**
 * Class representing LinksType
 *
 *
 * XSD Type: linksType
 */
class LinksType
{

    /**
     * @property \Flowfact\Resources\LinkType[] $link
     */
    private $link = null;

    /**
     * Adds as link
     *
     * @return self
     * @param \Flowfact\Resources\LinkType $link
     */
    public function addToLink(\Flowfact\Resources\LinkType $link)
    {
        $this->link[] = $link;
        return $this;
    }

    /**
     * isset link
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLink($index)
    {
        return isset($this->link[$index]);
    }

    /**
     * unset link
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLink($index)
    {
        unset($this->link[$index]);
    }

    /**
     * Gets as link
     *
     * @return \Flowfact\Resources\LinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * @param \Flowfact\Resources\LinkType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }


}

