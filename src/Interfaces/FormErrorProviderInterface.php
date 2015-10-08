<?php
namespace Digitas\Bundle\FormErrorMappingBundle\Interfaces;

use Symfony\Component\Form\FormInterface;

/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 28/09/15
 * Time: 11:23
 */
interface FormErrorProviderInterface
{
    public function getMappingFormErrorByIdError(FormInterface $form, $idError);
}