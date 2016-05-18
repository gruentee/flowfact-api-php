<?php

namespace Flowfact\Resources;

/**
 * Class representing BankAccountType
 *
 *
 * XSD Type: bankAccountType
 */
class BankAccountType
{

    /**
     * @property string $accountnumber
     */
    private $accountnumber = null;

    /**
     * @property string $bankcode
     */
    private $bankcode = null;

    /**
     * @property string $institute
     */
    private $institute = null;

    /**
     * @property string $iban
     */
    private $iban = null;

    /**
     * @property string $bic
     */
    private $bic = null;

    /**
     * Gets as accountnumber
     *
     * @return string
     */
    public function getAccountnumber()
    {
        return $this->accountnumber;
    }

    /**
     * Sets a new accountnumber
     *
     * @param string $accountnumber
     * @return self
     */
    public function setAccountnumber($accountnumber)
    {
        $this->accountnumber = $accountnumber;
        return $this;
    }

    /**
     * Gets as bankcode
     *
     * @return string
     */
    public function getBankcode()
    {
        return $this->bankcode;
    }

    /**
     * Sets a new bankcode
     *
     * @param string $bankcode
     * @return self
     */
    public function setBankcode($bankcode)
    {
        $this->bankcode = $bankcode;
        return $this;
    }

    /**
     * Gets as institute
     *
     * @return string
     */
    public function getInstitute()
    {
        return $this->institute;
    }

    /**
     * Sets a new institute
     *
     * @param string $institute
     * @return self
     */
    public function setInstitute($institute)
    {
        $this->institute = $institute;
        return $this;
    }

    /**
     * Gets as iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Sets a new iban
     *
     * @param string $iban
     * @return self
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
        return $this;
    }

    /**
     * Gets as bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * Sets a new bic
     *
     * @param string $bic
     * @return self
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
        return $this;
    }


}

