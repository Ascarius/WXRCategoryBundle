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
     * @return Category
     */
    public function setName($name);

    /**
     * Get name
     *
     * @return string
     */
    public function getName();

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
     * @return Category
     */
    public function setDescription($description);

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function __toString();
}
