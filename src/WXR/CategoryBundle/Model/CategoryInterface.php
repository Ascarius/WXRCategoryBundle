<?php

namespace WXR\CategoryBundle\Model;

interface CategoryInterface extends TagInterface
{
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
}
