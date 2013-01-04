<?php

namespace WXR\CategoryBundle\Model;

use WXR\CommonBundle\Model\BaseManagerInterface;

interface CategoryManagerInterface extends BaseManagerInterface
{
    /**
     * Find one by slug
     *
     * @param string $slug
     * @return CategoryInterface|null
     */
    public function findOneBySlug($slug);

    /**
     * Find last updated
     *
     * @return CategoryInterface|null
     */
    public function findLastUpdated();
}
