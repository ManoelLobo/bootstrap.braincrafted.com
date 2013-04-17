<?php

/**
 * This file is part of BraincraftedBootstrapDemoBundle.
 * (c) 2012 Florian Eckerstorfer
 */

namespace Bc\Bundle\BootstrapDemoBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * SupportedFormControlsType
 *
 * @category   FormType
 * @package    BraincraftedBootstrapBundle
 * @subpackage Form
 * @author     Florian Eckerstorfer <florian@eckerstorfer.co>
 * @copyright  2012 Florian Eckerstorfer
 * @license    http://opensource.org/licenses/MIT The MIT License
 * @link       http://bootstrap.braincrafted.com Bootstrap for Symfony2
 */
class SupportedFormControlsType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('text1', 'text', array(
            'attr' => array('placeholder' => 'Text input')
        ));

        $builder->add('text2', 'textarea', array(
            'attr' => array('rows' => 3)
        ));

        $builder->add('checkbox1', 'choice', array(
            'multiple'  => true,
            'expanded'  => true,
            'choices'   => array(
                'Option one is this and that—be sure to include why it\'s great'
            )
        ));
        $builder->add('radio1', 'choice', array(
            'expanded'  => true,
            'choices'   => array(
                'Option one is this and that—be sure to include why it\'s great',
                'Option two can be something else and selecting it will deselect option one'
            )
        ));
        $builder->add('inlineCheckboxes', 'choice', array(
            'multiple'  => true,
            'expanded'  => true,
            'choices'   => array(1, 2, 3),
            'attr'      => array('inline' => true)
        ));


        $builder->add('select1', 'choice', array(
            'choices' => array(1, 2, 3, 4, 5)
        ));
        $builder->add('select2', 'choice', array(
            'choices'   => array(1, 2, 3, 4, 5),
            'multiple'  => true
        ));

        $builder->add('date1', 'date');
        $builder->add('date2', 'date', array('widget' => 'single_text'));

        $builder->add('time1', 'time');
        $builder->add('time2', 'time', array('widget' => 'single_text'));

        $builder->add('datetime1', 'datetime');

        $builder->add(
            'datetime2',
            'datetime',
            array(
                'date_widget'   => 'single_text',
                'time_widget'   => 'single_text',
                'attr'          => array(
                    'date' => array(
                        'placeholder' => 'Start date'
                    ),
                    'time' => array(
                        'placeholder' => 'Start time'
                    )
                )
            )
        );

        $builder->add(
            'collection1',
            'bootstrap_collection',
            array('type' => 'text', 'allow_add' => true)
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'supported_form_controls';
    }
}