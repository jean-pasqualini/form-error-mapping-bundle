<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 28/09/15
 * Time: 11:46
 */

namespace Digitas\Bundle\FormErrorMappingBundle\Interfaces;

use Symfony\Component\Form\FormInterface;

interface FormErrorBinderInterface
{
    public function bindFormError(FormInterface $form, FormErrorAggregatorInterface $formErrorAggregator);
}