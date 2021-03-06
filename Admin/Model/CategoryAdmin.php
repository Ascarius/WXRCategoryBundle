<?php

namespace WXR\CategoryBundle\Admin\Model;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

abstract class CategoryAdmin extends Admin
{
    /**
     * {@inheritDoc}
     */
    protected $datagridValues = array(
        '_page' => 1,
        '_sort_by' => 'position',
        '_sort_order' => 'ASC'
    );

    /**
     * {@inheritDoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('description', null, array(
                'required' => false,
                'attr' => array('data-wysiwyg' => true, 'rows' => 20)
            ))
            ->add('position')
        ;
    }

    /**
     * {@inheritDoc}
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name')
        ;
    }

    /**
     * {@inheritDoc}
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
        ;
    }
}
