<?php
declare(strict_types=1);

namespace App\Form;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ColorTypeExtension extends AbstractTypeExtension
{

    /**
     * @inheritDoc
     */
    public static function getExtendedTypes(): iterable
    {
        return [ChoiceType::class];
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        // makes it legal for FileType fields to have an image_property option
        $resolver->setDefined(['color_property']);
    }

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        $view->vars['colors'] = ['czerwony', 'zielon', 'niebieski'];
    }
}
