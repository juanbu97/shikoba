<?php

namespace AppBundle\Form;

use AppBundle\Entity\Eventos;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Noticias_eventosType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('idEventos', EntityType::class, [
            'class' => Eventos::class,
            'mapped'=> false,
            'required' => true,
            'choice_value' => function (?Eventos $evento) {
                return $evento ? $evento->getId() : '';
            },
            'label' => false,
            'attr' => [
                'class' => 'browser-default',
            ]
        ]);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Noticias_eventos'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_noticias_eventos';
    }


}
