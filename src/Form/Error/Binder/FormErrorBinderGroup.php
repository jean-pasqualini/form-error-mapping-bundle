<?php
namespace Digitas\Bundle\FormErrorMappingBundle\Form\Error\Binder;

use Digitas\Bundle\FormErrorMappingBundle\Form\Error\FactoryAggregator\FactoryAggregatorByGroup;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorBinderInterface;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormFactoryAggregatorInterface;
use Symfony\Component\Form\FormInterface;

class FormErrorBinderGroup
{
    protected $formErrorBinder;

    protected $factoryAggregatorByGroup;

    public function __construct(FormErrorBinderInterface $formErrorBinder, FactoryAggregatorByGroup $factoryAggregatorByGroup)
    {
        $this->formErrorBinder = $formErrorBinder;

        $this->factoryAggregatorByGroup = $factoryAggregatorByGroup;
    }

    public function bindFormErrorByGroup(FormInterface $form, array $groupIds)
    {
        $this->formErrorBinder->bindFormError($form, $this->factoryAggregatorByGroup->factoryAggregatorByGroupsId($form, $groupIds));
    }
}