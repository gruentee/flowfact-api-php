<?php

namespace Flowfact\Resources;

/**
 * Class representing PropertyAvailabilityType
 *
 *
 * XSD Type: propertyAvailabilityType
 */
class PropertyAvailabilityType extends AvailabilityType
{

    /**
     * @property boolean $selection
     */
    private $selection = null;

    /**
     * @property boolean $expose
     */
    private $expose = null;

    /**
     * @property boolean $shortexpose
     */
    private $shortexpose = null;

    /**
     * @property boolean $templateinquiry
     */
    private $templateinquiry = null;

    /**
     * @property boolean $offeractivity
     */
    private $offeractivity = null;

    /**
     * Gets as selection
     *
     * @return boolean
     */
    public function getSelection()
    {
        return $this->selection;
    }

    /**
     * Sets a new selection
     *
     * @param boolean $selection
     * @return self
     */
    public function setSelection($selection)
    {
        $this->selection = $selection;
        return $this;
    }

    /**
     * Gets as expose
     *
     * @return boolean
     */
    public function getExpose()
    {
        return $this->expose;
    }

    /**
     * Sets a new expose
     *
     * @param boolean $expose
     * @return self
     */
    public function setExpose($expose)
    {
        $this->expose = $expose;
        return $this;
    }

    /**
     * Gets as shortexpose
     *
     * @return boolean
     */
    public function getShortexpose()
    {
        return $this->shortexpose;
    }

    /**
     * Sets a new shortexpose
     *
     * @param boolean $shortexpose
     * @return self
     */
    public function setShortexpose($shortexpose)
    {
        $this->shortexpose = $shortexpose;
        return $this;
    }

    /**
     * Gets as templateinquiry
     *
     * @return boolean
     */
    public function getTemplateinquiry()
    {
        return $this->templateinquiry;
    }

    /**
     * Sets a new templateinquiry
     *
     * @param boolean $templateinquiry
     * @return self
     */
    public function setTemplateinquiry($templateinquiry)
    {
        $this->templateinquiry = $templateinquiry;
        return $this;
    }

    /**
     * Gets as offeractivity
     *
     * @return boolean
     */
    public function getOfferactivity()
    {
        return $this->offeractivity;
    }

    /**
     * Sets a new offeractivity
     *
     * @param boolean $offeractivity
     * @return self
     */
    public function setOfferactivity($offeractivity)
    {
        $this->offeractivity = $offeractivity;
        return $this;
    }


}

