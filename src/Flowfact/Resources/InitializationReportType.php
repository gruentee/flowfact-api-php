<?php

namespace Flowfact\Resources;

/**
 * Class representing InitializationReportType
 *
 *
 * XSD Type: initializationReportType
 */
class InitializationReportType
{

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property \Flowfact\Resources\PropertyGroupType[] $group
     */
    private $group = null;

    /**
     * Gets as message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets a new message
     *
     * @param string $message
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * Adds as group
     *
     * @return self
     * @param \Flowfact\Resources\PropertyGroupType $group
     */
    public function addToGroup(\Flowfact\Resources\PropertyGroupType $group)
    {
        $this->group[] = $group;
        return $this;
    }

    /**
     * isset group
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGroup($index)
    {
        return isset($this->group[$index]);
    }

    /**
     * unset group
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGroup($index)
    {
        unset($this->group[$index]);
    }

    /**
     * Gets as group
     *
     * @return \Flowfact\Resources\PropertyGroupType[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * @param \Flowfact\Resources\PropertyGroupType[] $group
     * @return self
     */
    public function setGroup(array $group)
    {
        $this->group = $group;
        return $this;
    }


}

