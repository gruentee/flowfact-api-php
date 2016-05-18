<?php

namespace Flowfact\Resources;

/**
 * Class representing TitlesType
 *
 *
 * XSD Type: titlesType
 */
class TitlesType
{

    /**
     * @property string[] $title
     */
    private $title = null;

    /**
     * Adds as title
     *
     * @return self
     * @param string $title
     */
    public function addToTitle($title)
    {
        $this->title[] = $title;
        return $this;
    }

    /**
     * isset title
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTitle($index)
    {
        return isset($this->title[$index]);
    }

    /**
     * unset title
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTitle($index)
    {
        unset($this->title[$index]);
    }

    /**
     * Gets as title
     *
     * @return string[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string[] $title
     * @return self
     */
    public function setTitle(array $title)
    {
        $this->title = $title;
        return $this;
    }


}

