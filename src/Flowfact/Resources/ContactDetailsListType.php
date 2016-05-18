<?php

namespace Flowfact\Resources;

/**
 * Class representing ContactDetailsListType
 *
 *
 * XSD Type: contactDetailsListType
 */
class ContactDetailsListType extends LinkType
{

    /**
     * @property \Flowfact\Resources\DetailLinkType[] $detail
     */
    private $detail = null;

    /**
     * Adds as detail
     *
     * @return self
     * @param \Flowfact\Resources\DetailLinkType $detail
     */
    public function addToDetail(\Flowfact\Resources\DetailLinkType $detail)
    {
        $this->detail[] = $detail;
        return $this;
    }

    /**
     * isset detail
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetail($index)
    {
        return isset($this->detail[$index]);
    }

    /**
     * unset detail
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetail($index)
    {
        unset($this->detail[$index]);
    }

    /**
     * Gets as detail
     *
     * @return \Flowfact\Resources\DetailLinkType[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Sets a new detail
     *
     * @param \Flowfact\Resources\DetailLinkType[] $detail
     * @return self
     */
    public function setDetail(array $detail)
    {
        $this->detail = $detail;
        return $this;
    }


}

