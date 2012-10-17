<?php

namespace WXR\CategoryBundle\Entity;

use WXR\CategoryBundle\Model\CategoryManagerInterface;
use WXR\CommonBundle\Entity\BaseManager;

class CategoryManager extends BaseManager implements CategoryManagerInterface
{
    /**
     * {@inheritDoc}
     */
    public function findOneBySlug($slug)
    {
        return $this->findOneBy(array('slug' => $slug));
    }

    /**
     * {@inheritDoc}
     */
    protected function buildOrderClause(QueryBuilder $qb, array $orderBy = null)
    {
        $qb->addOrderBy('name' => 'ASC');

        parent::buildOrderClause($qb, $orderBy);
    }
}
