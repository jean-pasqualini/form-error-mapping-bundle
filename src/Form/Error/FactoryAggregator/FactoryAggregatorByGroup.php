<?php
namespace Digitas\Bundle\FormErrorMappingBundle\Form\Error\FactoryAggregator;
use Digitas\Bundle\FormErrorMappingBundle\Form\Error\Aggregator\FormErrorAgregatorCollection;
use Digitas\Bundle\FormErrorMappingBundle\Form\Error\Aggregator\FormErrorCollection;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorProviderInterface;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormFactoryAggregatorInterface;
use Symfony\Component\Form\FormInterface;

/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 28/09/15
 * Time: 15:53
 */
class FactoryAggregatorByGroup implements FormFactoryAggregatorInterface
{
    protected $formErrorProvider;

    public function __construct(FormErrorProviderInterface $formErrorProvider)
    {
        $this->formErrorProvider = $formErrorProvider;
    }

    public function factoryAggregatorByGroupsId(FormInterface $form, array $groupIds)
    {
        $formErrorAggregator = new FormErrorAgregatorCollection();

        foreach($groupIds as $groupId)
        {
            $formErrorAggregator->addAggregator(new FormErrorCollection($this->formErrorProvider->getMappingFormErrorByIdError($form, $groupId)));
        }

        return $formErrorAggregator;
    }
}