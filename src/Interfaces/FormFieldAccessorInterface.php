<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 28/09/15
 * Time: 11:32
 */

namespace Digitas\Bundle\FormErrorMappingBundle\Interfaces;


use Symfony\Component\Form\FormInterface;

interface FormFieldAccessorInterface
{
    public function getFormFieldByPath(FormInterface $form, $path);
}