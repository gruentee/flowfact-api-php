<?php

namespace Flowfact\Resources;

/**
 * Class representing AvailabilityType
 *
 *
 * XSD Type: availabilityType
 */
class AvailabilityType
{

    /**
     * @property boolean $estates
     */
    private $estates = null;

    /**
     * @property boolean $inquiries
     */
    private $inquiries = null;

    /**
     * @property boolean $contactdetails
     */
    private $contactdetails = null;

    /**
     * @property boolean $activities
     */
    private $activities = null;

    /**
     * @property boolean $projects
     */
    private $projects = null;

    /**
     * Gets as estates
     *
     * @return boolean
     */
    public function getEstates()
    {
        return $this->estates;
    }

    /**
     * Sets a new estates
     *
     * @param boolean $estates
     * @return self
     */
    public function setEstates($estates)
    {
        $this->estates = $estates;
        return $this;
    }

    /**
     * Gets as inquiries
     *
     * @return boolean
     */
    public function getInquiries()
    {
        return $this->inquiries;
    }

    /**
     * Sets a new inquiries
     *
     * @param boolean $inquiries
     * @return self
     */
    public function setInquiries($inquiries)
    {
        $this->inquiries = $inquiries;
        return $this;
    }

    /**
     * Gets as contactdetails
     *
     * @return boolean
     */
    public function getContactdetails()
    {
        return $this->contactdetails;
    }

    /**
     * Sets a new contactdetails
     *
     * @param boolean $contactdetails
     * @return self
     */
    public function setContactdetails($contactdetails)
    {
        $this->contactdetails = $contactdetails;
        return $this;
    }

    /**
     * Gets as activities
     *
     * @return boolean
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Sets a new activities
     *
     * @param boolean $activities
     * @return self
     */
    public function setActivities($activities)
    {
        $this->activities = $activities;
        return $this;
    }

    /**
     * Gets as projects
     *
     * @return boolean
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Sets a new projects
     *
     * @param boolean $projects
     * @return self
     */
    public function setProjects($projects)
    {
        $this->projects = $projects;
        return $this;
    }


}

