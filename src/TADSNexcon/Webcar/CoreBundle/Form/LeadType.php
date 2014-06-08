<?php

namespace TADSNexcon\Webcar\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LeadType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cpf')
            ->add('name')
            ->add('email')
            ->add('sex', 'choice', array(
    'choices'   => array('m' => 'Masculino', 'f' => 'Feminino'),
    'required'  => true))
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
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TADSNexcon\Webcar\CoreBundle\Entity\Lead'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'tadsnexcon_webcar_corebundle_lead';
    }
}
