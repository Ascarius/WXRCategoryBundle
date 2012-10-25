<?php

namespace WXR\CategoryBundle\Model;

interface CategoryInterface
{
    /**
     * Get id
     *
     * @return integer
     */
    public function getId();

    /**
     * Set name
     *
     * @param string $name
     * @return CategoryInterface
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

    /**
     * Set slug
     *
     * @param string $slug
     * @return CategoryInterface
     */
    public function setSlug($slug);

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug();

    /**
     * Set description
     *
     * @param string $description
     * @return CategoryInterface
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Set position
     *
     * @param integer $position
     * @return CategoryInterface
     */
    public function setPosition($position);

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition();

    /**
     * @return string
     */
    public function __toString();
}
