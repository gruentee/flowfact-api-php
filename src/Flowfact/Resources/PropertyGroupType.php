<?php

namespace Flowfact\Resources;

/**
 * Class representing PropertyGroupType
 *
 *
 * XSD Type: propertyGroupType
 */
class PropertyGroupType
{

    /**
     * @property string $scope
     */
    private $scope = null;

    /**
     * @property string $message
     */
    private $message = null;

    /**
     * @property string[] $error
     */
    private $error = null;

    /**
     * @property \Flowfact\Resources\PropertyReportType[] $alreadymappedproperties
     */
    private $alreadymappedproperties = null;

    /**
     * @property \Flowfact\Resources\PropertyReportType[] $initializedproperties
     */
    private $initializedproperties = null;

    /**
     * Gets as scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Sets a new scope
     *
     * @param string $scope
     * @return self
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

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
     * Adds as error
     *
     * @return self
     * @param string $error
     */
    public function addToError($error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * @param scalar $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * @return string[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * @param string[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }

    /**
     * Adds as alreadymappedproperties
     *
     * @return self
     * @param \Flowfact\Resources\PropertyReportType $alreadymappedproperties
     */
    public function addToAlreadymappedproperties(\Flowfact\Resources\PropertyReportType $alreadymappedproperties)
    {
        $this->alreadymappedproperties[] = $alreadymappedproperties;
        return $this;
    }

    /**
     * isset alreadymappedproperties
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAlreadymappedproperties($index)
    {
        return isset($this->alreadymappedproperties[$index]);
    }

    /**
     * unset alreadymappedproperties
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAlreadymappedproperties($index)
    {
        unset($this->alreadymappedproperties[$index]);
    }

    /**
     * Gets as alreadymappedproperties
     *
     * @return \Flowfact\Resources\PropertyReportType[]
     */
    public function getAlreadymappedproperties()
    {
        return $this->alreadymappedproperties;
    }

    /**
     * Sets a new alreadymappedproperties
     *
     * @param \Flowfact\Resources\PropertyReportType[] $alreadymappedproperties
     * @return self
     */
    public function setAlreadymappedproperties(array $alreadymappedproperties)
    {
        $this->alreadymappedproperties = $alreadymappedproperties;
        return $this;
    }

    /**
     * Adds as initializedproperties
     *
     * @return self
     * @param \Flowfact\Resources\PropertyReportType $initializedproperties
     */
    public function addToInitializedproperties(\Flowfact\Resources\PropertyReportType $initializedproperties)
    {
        $this->initializedproperties[] = $initializedproperties;
        return $this;
    }

    /**
     * isset initializedproperties
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInitializedproperties($index)
    {
        return isset($this->initializedproperties[$index]);
    }

    /**
     * unset initializedproperties
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInitializedproperties($index)
    {
        unset($this->initializedproperties[$index]);
    }

    /**
     * Gets as initializedproperties
     *
     * @return \Flowfact\Resources\PropertyReportType[]
     */
    public function getInitializedproperties()
    {
        return $this->initializedproperties;
    }

    /**
     * Sets a new initializedproperties
     *
     * @param \Flowfact\Resources\PropertyReportType[] $initializedproperties
     * @return self
     */
    public function setInitializedproperties(array $initializedproperties)
    {
        $this->initializedproperties = $initializedproperties;
        return $this;
    }


}

