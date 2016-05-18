<?php

namespace Flowfact\Resources;

/**
 * Class representing IndexedNumberType
 *
 *
 * XSD Type: indexedNumberType
 */
class IndexedNumberType extends NumberType
{

    /**
     * @property integer $postion
     */
    private $postion = null;

    /**
     * Gets as postion
     *
     * @return integer
     */
    public function getPostion()
    {
        return $this->postion;
    }

    /**
     * Sets a new postion
     *
     * @param integer $postion
     * @return self
     */
    public function setPostion($postion)
    {
        $this->postion = $postion;
        return $this;
    }


}

