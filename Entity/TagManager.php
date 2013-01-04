<?php

namespace WXR\CategoryBundle\Entity;

use Doctrine\ORM\QueryBuilder;

use WXR\CategoryBundle\Model\TagManagerInterface;
use WXR\CommonBundle\Entity\BaseManager;

class TagManager extends BaseManager implements TagManagerInterface
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
        $tag = $this->findBy(
            array(),
            array('updatedAt' => 'DESC'),
            1
        );

        if ($tag) {
            return current($tag);
        }

        return null;
    }

    /**
     * {@inheritDoc}
     */
    protected function buildOrderClause(QueryBuilder $qb, array $orderBy = null)
    {
        if (!$orderBy) {
            $orderBy = array('name' => 'ASC');
        }

        parent::buildOrderClause($qb, $orderBy);
    }
}
