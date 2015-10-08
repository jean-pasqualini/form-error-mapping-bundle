<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 28/09/15
 * Time: 11:39
 */

namespace Digitas\Bundle\FormErrorMappingBundle\Form\Error\Provider;

use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorProviderInterface;
use Symfony\Component\Form\FormInterface;

class FormGroupErrorProviderArray implements FormErrorProviderInterface
{
    public function __construct(array $mappingFormError)
    {
        $this->allMappingFormError = $mappingFormError;
    }

    protected function getAllMappingFormError()
    {
        return $this->allMappingFormError;
    }

    public function getMappingFormErrorByIdError(FormInterface $form, $idError)
    {
        $allMapping = $this->getAllMappingFormError();

        $formName = (isset($allMapping[$form->getName()])) ? $form->getName() : "default";

        return (isset($allMapping[$formName][$idError]) ? $allMapping[$formName][$idError] : array());
    }
}