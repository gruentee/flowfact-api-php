<?php

namespace Flowfact\Resources;

/**
 * Class representing DsnListType
 *
 *
 * XSD Type: dsnListType
 */
class DsnListType
{

    /**
     * @property string[] $dsn
     */
    private $dsn = null;

    /**
     * Adds as dsn
     *
     * @return self
     * @param string $dsn
     */
    public function addToDsn($dsn)
    {
        $this->dsn[] = $dsn;
        return $this;
    }

    /**
     * isset dsn
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDsn($index)
    {
        return isset($this->dsn[$index]);
    }

    /**
     * unset dsn
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDsn($index)
    {
        unset($this->dsn[$index]);
    }

    /**
     * Gets as dsn
     *
     * @return string[]
     */
    public function getDsn()
    {
        return $this->dsn;
    }

    /**
     * Sets a new dsn
     *
     * @param string[] $dsn
     * @return self
     */
    public function setDsn(array $dsn)
    {
        $this->dsn = $dsn;
        return $this;
    }


}

