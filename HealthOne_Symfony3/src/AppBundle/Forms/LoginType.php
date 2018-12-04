<?php
/**
 * Created by PhpStorm.
 * User: Sem
 * Date: 21-11-2018
 * Time: 09:47
 */

namespace AppBundle\Forms;

use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Button;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LoginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gebruiker', ChoiceType::class, [
                'choices'=> [
                    'Verzekeringsmedewerker' => 'Verzekeringsmedewerker',
                    'Arts' => 'Arts',
                    'Apotheker' => 'Apotheker',
                ],
            ])
            ->add('cancel', ButtonType::class)
            ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults( ['data_class' => 'AppBundle\Entity\Login'] );
    }
};
