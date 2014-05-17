<?php

namespace TADSNexcon\Webcar\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ConcessionaryAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('cnpj')
            ->add('cep')
            ->add('city')
            ->add('number')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('site')
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
            ->add('cnpj')
            ->add('cep')
            ->add('city')
            ->add('number')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('site')
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
            ->add('cnpj')
            ->add('cep')
            ->add('city')
            ->add('number')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('site')
            ->add('latlng', 'oh_google_maps')
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
            ->add('cnpj')
            ->add('cep')
            ->add('city')
            ->add('number')
            ->add('uf')
            ->add('street')
            ->add('neighborhood')
            ->add('site')
        ;
    }
}
