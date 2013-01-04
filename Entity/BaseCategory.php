<?php

namespace WXR\CategoryBundle\Entity;

use WXR\CategoryBundle\Model\Category;

/**
 * WXR\CategoryBundle\Entity\BaseCategory
 *
 * @author Lionel Gaillard <lionel.gaillard@wxrstudios.com>
 */
abstract class BaseCategory extends Category
{
    /**
     * Update updatedAt
     */
    public function onPreUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
}
