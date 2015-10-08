<?php
/**
 * Created by PhpStorm.
 * User: prestataire
 * Date: 28/09/15
 * Time: 15:43
 */

namespace Digitas\Bundle\FormErrorMappingBundle\Form\Error\Aggregator;


use Digitas\Bundle\FormErrorMappingBundle\Interfaces\FormErrorAggregatorInterface;

class FormErrorCollection implements FormErrorAggregatorInterface
{
    protected $formErrors;

    public function __construct(array $formErrors)
    {
        $this->formErrors = $formErrors;
    }

    public function getErrors()
    {
        return $this->formErrors;
    }
}