<?php

namespace Kunstmaan\SeoBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * SeoType
 */
class RobotsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('robotsTxt', 'textarea', array(
            'label' => 'robots.txt',
            'attr' => array(
                'rows' => 15
            )
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'kunstmaanseobundle_settings_form_type';
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Kunstmaan\SeoBundle\Entity\Robots',
        ));
    }

    // BC for SF < 2.7
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }
}
