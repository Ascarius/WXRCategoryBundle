<?php

namespace WXR\CategoryBundle\Form\Handler;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

use WXR\CategoryBundle\Model\CategoryInterface;
use WXR\CategoryBundle\Model\CategoryManagerInterface;

class CategoryHandler
{
    protected $request;

    protected $form;

    protected $categoryManager;

    public function __construct(Request $request, FormInterface $form, CategoryManagerInterface $categoryManager)
    {
        $this->request = $request;
        $this->form = $form;
        $this->categoryManager = $categoryManager;
    }

    public function getForm()
    {
        return $this->form;
    }

    public function process(CategoryInterface $category)
    {
        $this->form->setData($category);

        if ('POST' === $this->request->getMethod()) {
            $this->form->bindRequest($this->request);

            if ($this->form->isValid()) {
                $this->onSuccess($category);

                return true;
            }
        }

        return false;
    }

    protected function onSuccess(CategoryInterface $category)
    {
        $this->categoryManager->persist($category);
    }
}
