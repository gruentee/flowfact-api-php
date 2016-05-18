<?php

namespace Flowfact\Resources;

/**
 * Class representing CustomizedOptionType
 *
 *
 * XSD Type: CustomizedOptionType
 */
class CustomizedOptionType extends BaseCustomizedType
{

    /**
     * Defines what kind of data the given field
     *  represents (e.g. "Payment behaviour").
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Points to the selected value for this optiontype. Contains a human
     *  readable
     *  name in the rel-Attribute and a valid URL pointing to the selected
     *  value.
     *
     * @property \Flowfact\Resources\LinkType $selected
     */
    private $selected = null;

    /**
     * @property \Flowfact\Resources\LinkType $options
     */
    private $options = null;

    /**
     * Gets as name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Payment behaviour").
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Defines what kind of data the given field
     *  represents (e.g. "Payment behaviour").
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as selected
     *
     * Points to the selected value for this optiontype. Contains a human
     *  readable
     *  name in the rel-Attribute and a valid URL pointing to the selected
     *  value.
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getSelected()
    {
        return $this->selected;
    }

    /**
     * Sets a new selected
     *
     * Points to the selected value for this optiontype. Contains a human
     *  readable
     *  name in the rel-Attribute and a valid URL pointing to the selected
     *  value.
     *
     * @param \Flowfact\Resources\LinkType $selected
     * @return self
     */
    public function setSelected(\Flowfact\Resources\LinkType $selected)
    {
        $this->selected = $selected;
        return $this;
    }

    /**
     * Gets as options
     *
     * @return \Flowfact\Resources\LinkType
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets a new options
     *
     * @param \Flowfact\Resources\LinkType $options
     * @return self
     */
    public function setOptions(\Flowfact\Resources\LinkType $options)
    {
        $this->options = $options;
        return $this;
    }


}

