<?php

namespace Flowfact\Resources\ContactType;

/**
 * Class representing EmailaddressesAType
 */
class EmailaddressesAType
{

    /**
     * @property string $primaryemail
     */
    private $primaryemail = null;

    /**
     * @property \Flowfact\Resources\IndexedEmailType[] $additionalemail
     */
    private $additionalemail = null;

    /**
     * Gets as primaryemail
     *
     * @return string
     */
    public function getPrimaryemail()
    {
        return $this->primaryemail;
    }

    /**
     * Sets a new primaryemail
     *
     * @param string $primaryemail
     * @return self
     */
    public function setPrimaryemail($primaryemail)
    {
        $this->primaryemail = $primaryemail;
        return $this;
    }

    /**
     * Adds as additionalemail
     *
     * @return self
     * @param \Flowfact\Resources\IndexedEmailType $additionalemail
     */
    public function addToAdditionalemail(\Flowfact\Resources\IndexedEmailType $additionalemail)
    {
        $this->additionalemail[] = $additionalemail;
        return $this;
    }

    /**
     * isset additionalemail
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdditionalemail($index)
    {
        return isset($this->additionalemail[$index]);
    }

    /**
     * unset additionalemail
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdditionalemail($index)
    {
        unset($this->additionalemail[$index]);
    }

    /**
     * Gets as additionalemail
     *
     * @return \Flowfact\Resources\IndexedEmailType[]
     */
    public function getAdditionalemail()
    {
        return $this->additionalemail;
    }

    /**
     * Sets a new additionalemail
     *
     * @param \Flowfact\Resources\IndexedEmailType[] $additionalemail
     * @return self
     */
    public function setAdditionalemail(array $additionalemail)
    {
        $this->additionalemail = $additionalemail;
        return $this;
    }


}

