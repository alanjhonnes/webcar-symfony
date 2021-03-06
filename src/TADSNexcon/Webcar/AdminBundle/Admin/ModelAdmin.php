<?php

namespace TADSNexcon\Webcar\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ModelAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name')
            ->add('price')
            ->add('motorization')
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
            ->add('motorization')
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
            ->add('price')
            ->add('motorization')
            ->add('vehicle', 'sonata_type_model_list')
//            ->add('modelColors', 'sonata_type_collection')
            ->add('modelColors', 'sonata_type_collection', array(
                // Prevents the "Delete" option from being displayed
//                'modifiable'    => true,
                'by_reference' => false,
                'type_options' => array('delete' => true)
                //,'type' => 'sonata_type_model_list'
            ), array(
//                'class' => 'TADSNexcon/Webcar/CoreBundle/Entity/ModelColor',
//                'multiple' => true,
//                'expanded' => true,
                'edit' => 'inline',
                'inline' => 'table',
                'sortable' => 'position',
                
            ))
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
            ->add('price')
            ->add('motorization')
        ;
    }
}
