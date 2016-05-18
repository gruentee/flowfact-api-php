<?php

namespace Flowfact\Resources;

/**
 * Class representing IndexedEmailType
 *
 *
 * XSD Type: indexedEmailType
 */
class IndexedEmailType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * @property integer $postion
     */
    private $postion = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

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

