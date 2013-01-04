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
    public function findLastUpdated()
    {
        $category = $this->findBy(
            array(),
            array('updatedAt' => 'DESC'),
            1
        );

        if ($category) {
            return current($category);
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    protected function buildOrderClause(QueryBuilder $qb, array $orderBy = null)
    {
        if (!$orderBy) {
            $orderBy = array('position' => 'ASC', 'name' => 'ASC');
        }

        parent::buildOrderClause($qb, $orderBy);
    }
}
