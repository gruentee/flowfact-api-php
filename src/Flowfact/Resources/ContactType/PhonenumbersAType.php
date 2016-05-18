<?php

namespace Flowfact\Resources\ContactType;

/**
 * Class representing PhonenumbersAType
 */
class PhonenumbersAType
{

    /**
     * @property \Flowfact\Resources\NumberType $office
     */
    private $office = null;

    /**
     * @property \Flowfact\Resources\NumberType $mobile
     */
    private $mobile = null;

    /**
     * @property \Flowfact\Resources\NumberType $private
     */
    private $private = null;

    /**
     * @property \Flowfact\Resources\NumberType $secretary
     */
    private $secretary = null;

    /**
     * @property \Flowfact\Resources\NumberType $fax
     */
    private $fax = null;

    /**
     * @property \Flowfact\Resources\NumberType $office2
     */
    private $office2 = null;

    /**
     * @property \Flowfact\Resources\NumberType $private2
     */
    private $private2 = null;

    /**
     * @property \Flowfact\Resources\NumberType $pager
     */
    private $pager = null;

    /**
     * @property \Flowfact\Resources\NumberType $auto
     */
    private $auto = null;

    /**
     * @property \Flowfact\Resources\NumberType[] $other
     */
    private $other = null;

    /**
     * Gets as office
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Sets a new office
     *
     * @param \Flowfact\Resources\NumberType $office
     * @return self
     */
    public function setOffice(\Flowfact\Resources\NumberType $office)
    {
        $this->office = $office;
        return $this;
    }

    /**
     * Gets as mobile
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets a new mobile
     *
     * @param \Flowfact\Resources\NumberType $mobile
     * @return self
     */
    public function setMobile(\Flowfact\Resources\NumberType $mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * Gets as private
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     * Sets a new private
     *
     * @param \Flowfact\Resources\NumberType $private
     * @return self
     */
    public function setPrivate(\Flowfact\Resources\NumberType $private)
    {
        $this->private = $private;
        return $this;
    }

    /**
     * Gets as secretary
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getSecretary()
    {
        return $this->secretary;
    }

    /**
     * Sets a new secretary
     *
     * @param \Flowfact\Resources\NumberType $secretary
     * @return self
     */
    public function setSecretary(\Flowfact\Resources\NumberType $secretary)
    {
        $this->secretary = $secretary;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param \Flowfact\Resources\NumberType $fax
     * @return self
     */
    public function setFax(\Flowfact\Resources\NumberType $fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as office2
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getOffice2()
    {
        return $this->office2;
    }

    /**
     * Sets a new office2
     *
     * @param \Flowfact\Resources\NumberType $office2
     * @return self
     */
    public function setOffice2(\Flowfact\Resources\NumberType $office2)
    {
        $this->office2 = $office2;
        return $this;
    }

    /**
     * Gets as private2
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getPrivate2()
    {
        return $this->private2;
    }

    /**
     * Sets a new private2
     *
     * @param \Flowfact\Resources\NumberType $private2
     * @return self
     */
    public function setPrivate2(\Flowfact\Resources\NumberType $private2)
    {
        $this->private2 = $private2;
        return $this;
    }

    /**
     * Gets as pager
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getPager()
    {
        return $this->pager;
    }

    /**
     * Sets a new pager
     *
     * @param \Flowfact\Resources\NumberType $pager
     * @return self
     */
    public function setPager(\Flowfact\Resources\NumberType $pager)
    {
        $this->pager = $pager;
        return $this;
    }

    /**
     * Gets as auto
     *
     * @return \Flowfact\Resources\NumberType
     */
    public function getAuto()
    {
        return $this->auto;
    }

    /**
     * Sets a new auto
     *
     * @param \Flowfact\Resources\NumberType $auto
     * @return self
     */
    public function setAuto(\Flowfact\Resources\NumberType $auto)
    {
        $this->auto = $auto;
        return $this;
    }

    /**
     * Adds as other
     *
     * @return self
     * @param \Flowfact\Resources\NumberType $other
     */
    public function addToOther(\Flowfact\Resources\NumberType $other)
    {
        $this->other[] = $other;
        return $this;
    }

    /**
     * isset other
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOther($index)
    {
        return isset($this->other[$index]);
    }

    /**
     * unset other
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOther($index)
    {
        unset($this->other[$index]);
    }

    /**
     * Gets as other
     *
     * @return \Flowfact\Resources\NumberType[]
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * Sets a new other
     *
     * @param \Flowfact\Resources\NumberType[] $other
     * @return self
     */
    public function setOther(array $other)
    {
        $this->other = $other;
        return $this;
    }


}

