<?php

namespace Flowfact\Resources;

/**
 * Class representing NumberType
 *
 * Every phonenumber supplied to/by the API is divided into the country code
 * (dialed in order to reach the 
 *  desired country), the areacode (dialed in order to reach the desired
 * city/region/area) and the subscribernumber.
 *  All these values have to obey the given format, which basically describes the
 * payload as pure digit values (see the regexp please). 
 *  In some countries (like Italy) the leading "zero" in front of a areacode has to
 * be dialed. In such a case it should be supplied to the
 *  service - in all other cases the leading zero should to be ommitted!
 * XSD Type: numberType
 */
class NumberType
{

    /**
     * @property string $countrycode
     */
    private $countrycode = null;

    /**
     * This is the areacode (citycode) of the telephonenumber. 
     *  The leading "0" for most countries' areacodes is not to be supplied!
     *
     * @property string $areacode
     */
    private $areacode = null;

    /**
     * @property string $subscribernumber
     */
    private $subscribernumber = null;

    /**
     * @property string $note
     */
    private $note = null;

    /**
     * Gets as countrycode
     *
     * @return string
     */
    public function getCountrycode()
    {
        return $this->countrycode;
    }

    /**
     * Sets a new countrycode
     *
     * @param string $countrycode
     * @return self
     */
    public function setCountrycode($countrycode)
    {
        $this->countrycode = $countrycode;
        return $this;
    }

    /**
     * Gets as areacode
     *
     * This is the areacode (citycode) of the telephonenumber. 
     *  The leading "0" for most countries' areacodes is not to be supplied!
     *
     * @return string
     */
    public function getAreacode()
    {
        return $this->areacode;
    }

    /**
     * Sets a new areacode
     *
     * This is the areacode (citycode) of the telephonenumber. 
     *  The leading "0" for most countries' areacodes is not to be supplied!
     *
     * @param string $areacode
     * @return self
     */
    public function setAreacode($areacode)
    {
        $this->areacode = $areacode;
        return $this;
    }

    /**
     * Gets as subscribernumber
     *
     * @return string
     */
    public function getSubscribernumber()
    {
        return $this->subscribernumber;
    }

    /**
     * Sets a new subscribernumber
     *
     * @param string $subscribernumber
     * @return self
     */
    public function setSubscribernumber($subscribernumber)
    {
        $this->subscribernumber = $subscribernumber;
        return $this;
    }

    /**
     * Gets as note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Sets a new note
     *
     * @param string $note
     * @return self
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }


}

