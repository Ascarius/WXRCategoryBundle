<?php

namespace WXR\CategoryBundle\Model;

use WXR\CommonBundle\Model\BaseManagerInterface;

interface TagManagerInterface extends BaseManagerInterface
{
    /**
     * Find one by slug
     *
     * @param string $slug
     * @return TagInterface|null
     */
    public function findOneBySlug($slug);

    /**
     * Find last updated
     *
     * @return TagInterface|null
     */
    public function findLastUpdated();
}
