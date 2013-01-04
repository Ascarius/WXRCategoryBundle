<?php

namespace WXR\CategoryBundle\Model;

/**
 * WXR\CategoryBundle\Model\Category
 */
abstract class Category extends Tag implements CategoryInterface
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @var integer
     */
    protected $position;


    public function __construct()
    {
        parent::__construct();
        $this->position = 0;
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {
        return $this->position;
    }
}
