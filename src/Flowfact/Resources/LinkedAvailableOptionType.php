<?php

namespace Flowfact\Resources;

/**
 * Class representing LinkedAvailableOptionType
 *
 *
 * XSD Type: linkedAvailableOptionType
 */
class LinkedAvailableOptionType extends LinkType
{

    /**
     * @property string $filter
     */
    private $filter = null;

    /**
     * Gets as filter
     *
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Sets a new filter
     *
     * @param string $filter
     * @return self
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }


}

