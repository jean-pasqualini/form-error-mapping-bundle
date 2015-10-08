<?php
namespace Digitas\Bundle\FormErrorMappingBundle\Form\Error\Binder;


use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorAggregatorInterface;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorBinderInterface;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorProviderInterface;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormFieldAccessorInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Form\FormInterface;

class FormErrorBinder implements FormErrorBinderInterface
{
    protected $formFieldAccessor;

    public function __construct(FormFieldAccessorInterface $formFieldAccessor)
    {
        $this->formFieldAccessor = $formFieldAccessor;
    }

    public function bindFormError(FormInterface $form, FormErrorAggregatorInterface $formErrorAggregator)
    {
        $errors = $formErrorAggregator->getErrors();

        foreach($errors as $field => $message)
        {
           $this->formFieldAccessor->getFormFieldByPath($form, $field)->addError(new FormError($message));
        }
    }
}