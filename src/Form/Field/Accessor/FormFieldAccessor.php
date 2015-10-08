<?php
namespace Digitas\Bundle\FormErrorMappingBundle\Form\Field\Accessor;


use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormFieldAccessorInterface;
use Symfony\Component\Form\FormInterface;

class FormFieldAccessor implements FormFieldAccessorInterface
{
    public function getFormFieldByPath(FormInterface $form, $path)
    {
        return ($path == "root") ? $form : $form->get($path);
    }
}