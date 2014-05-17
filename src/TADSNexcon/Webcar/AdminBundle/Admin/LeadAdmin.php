<?php

namespace TADSNexcon\Webcar\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class LeadAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('sex')
            ->add('birthday')
            ->add('cep')
            ->add('city')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('ddd')
            ->add('phone')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('sex')
            ->add('birthday')
            ->add('cep')
            ->add('city')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('ddd')
            ->add('phone')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('email')
            ->add('sex')
            ->add('birthday')
            ->add('cep')
            ->add('city')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('ddd')
            ->add('phone')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('email')
            ->add('sex')
            ->add('birthday')
            ->add('cep')
            ->add('city')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('ddd')
            ->add('phone')
        ;
    }
}
