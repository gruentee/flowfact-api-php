<?php

namespace Flowfact\Resources;

/**
 * Class representing VersionedLinkType
 *
 *
 * XSD Type: versionedLink
 */
class VersionedLinkType extends LinkType
{

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }


}

