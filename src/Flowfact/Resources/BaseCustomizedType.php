<?php

namespace Flowfact\Resources;

/**
 * Class representing BaseCustomizedType
 *
 *
 * XSD Type: baseCustomizedType
 */
class BaseCustomizedType
{

    /**
     * The class name of the instance: com.flowfact.schema.rest.CustomizedBooleanType,
     * ...
     *
     * @property string $type
     */
    private $type = null;

    /**
     * This element is present for almost every writable resource in the system, but
     * only needed for
     *  inquiries.
     *
     * @property boolean $musthave
     */
    private $musthave = null;

    /**
     * This element is present for almost every writable resource in the system, but
     * only needed for
     *  inquiries.
     *
     * @property string $rating
     */
    private $rating = null;

    /**
     * Gets as type
     *
     * The class name of the instance: com.flowfact.schema.rest.CustomizedBooleanType,
     * ...
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * The class name of the instance: com.flowfact.schema.rest.CustomizedBooleanType,
     * ...
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Gets as musthave
     *
     * This element is present for almost every writable resource in the system, but
     * only needed for
     *  inquiries.
     *
     * @return boolean
     */
    public function getMusthave()
    {
        return $this->musthave;
    }

    /**
     * Sets a new musthave
     *
     * This element is present for almost every writable resource in the system, but
     * only needed for
     *  inquiries.
     *
     * @param boolean $musthave
     * @return self
     */
    public function setMusthave($musthave)
    {
        $this->musthave = $musthave;
        return $this;
    }

    /**
     * Gets as rating
     *
     * This element is present for almost every writable resource in the system, but
     * only needed for
     *  inquiries.
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets a new rating
     *
     * This element is present for almost every writable resource in the system, but
     * only needed for
     *  inquiries.
     *
     * @param string $rating
     * @return self
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
        return $this;
    }


}

