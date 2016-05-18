<?php

namespace Flowfact\Resources;

/**
 * Class representing PropertyReportType
 *
 *
 * XSD Type: propertyReportType
 */
class PropertyReportType extends LinkType
{

    /**
     * @property string $mappingtype
     */
    private $mappingtype = null;

    /**
     * @property string $tagname
     */
    private $tagname = null;

    /**
     * Gets as mappingtype
     *
     * @return string
     */
    public function getMappingtype()
    {
        return $this->mappingtype;
    }

    /**
     * Sets a new mappingtype
     *
     * @param string $mappingtype
     * @return self
     */
    public function setMappingtype($mappingtype)
    {
        $this->mappingtype = $mappingtype;
        return $this;
    }

    /**
     * Gets as tagname
     *
     * @return string
     */
    public function getTagname()
    {
        return $this->tagname;
    }

    /**
     * Sets a new tagname
     *
     * @param string $tagname
     * @return self
     */
    public function setTagname($tagname)
    {
        $this->tagname = $tagname;
        return $this;
    }


}

