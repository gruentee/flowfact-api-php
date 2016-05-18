<?php

namespace Flowfact\Resources;

/**
 * Class representing AccessType
 *
 *
 * XSD Type: accessType
 */
class AccessType
{

    /**
     * @property string $right
     */
    private $right = null;

    /**
     * Gets as right
     *
     * @return string
     */
    public function getRight()
    {
        return $this->right;
    }

    /**
     * Sets a new right
     *
     * @param string $right
     * @return self
     */
    public function setRight($right)
    {
        $this->right = $right;
        return $this;
    }


}

