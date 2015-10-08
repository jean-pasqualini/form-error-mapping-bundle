<?php

namespace Digitas\Bundle\FormErrorMappingBundle\Form\Error\Aggregator;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorAggregatorInterface;
use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorProviderInterface;
use Symfony\Component\Form\FormInterface;

/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 28/09/15
 * Time: 13:57
 */
class FormErrorAgregatorCollection implements FormErrorAggregatorInterface
{
    protected $formErrorsAggretators;

    public function __construct(array $formErrorsAggretators = array())
    {
        $this->formErrorsAggretators = $formErrorsAggretators;
    }

    public function addAggregator(FormErrorAggregatorInterface $aggregator)
    {
        $this->formErrorsAggretators[] = $aggregator;
    }

    public function getErrors()
    {
        $errors = array();

        foreach($this->formErrorsAggretators as $formErrorsAggregator)
        {
            $errors = array_merge($errors, $formErrorsAggregator->getErrors());
        }

        return $errors;
    }
}