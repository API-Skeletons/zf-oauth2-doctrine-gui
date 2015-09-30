<?php
namespace DoctrineGui\Form\Factory;

use DoctrineAdmin\Form\JwtForm;
use DoctrineAdmin\InputFilter\JwtFilter;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;


class JwtFormFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new JwtForm(
            $serviceLocator->getServiceLocator()->get('InputFilterManager')->get(JwtFilter::class)
        );
    }
}