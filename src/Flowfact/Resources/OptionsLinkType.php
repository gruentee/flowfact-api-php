<?php

namespace Flowfact\Resources;

/**
 * Class representing OptionsLinkType
 *
 *
 * XSD Type: optionsLinkType
 */
class OptionsLinkType
{

    /**
     * @property \Flowfact\Resources\OptionLinkType[] $link
     */
    private $link = null;

    /**
     * Adds as link
     *
     * @return self
     * @param \Flowfact\Resources\OptionLinkType $link
     */
    public function addToLink(\Flowfact\Resources\OptionLinkType $link)
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
     * @return \Flowfact\Resources\OptionLinkType[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Sets a new link
     *
     * @param \Flowfact\Resources\OptionLinkType[] $link
     * @return self
     */
    public function setLink(array $link)
    {
        $this->link = $link;
        return $this;
    }


}

