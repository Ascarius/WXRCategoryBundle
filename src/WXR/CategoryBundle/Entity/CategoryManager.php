<?php

namespace WXR\CategoryBundle\Entity;

use Doctrine\ORM\QueryBuilder;

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
        $default = array('name' => 'ASC');

        $orderBy = $orderBy ?
            array_merge($default, $orderBy) : $default;

        parent::buildOrderClause($qb, $orderBy);
    }
}
