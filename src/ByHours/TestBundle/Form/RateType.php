<?php

namespace ByHours\TestBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RateType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fromDatetime')
            ->add('toDatetime')
            ->add('rate')
            ->add('status')
            ->add('accommodationUnit')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ByHours\TestBundle\Entity\Rate'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'byhours_testbundle_rate';
    }
}
