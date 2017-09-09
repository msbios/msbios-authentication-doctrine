<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Authentication\Doctrine;

return [

    'doctrine' => [
        'authentication' => [
            'orm_default' => [
                'object_manager' => \Doctrine\ORM\EntityManager::class,
                'identity_class' => null,
                'identity_property' => null,
                'credential_property' => null,
                'credential_callable' => VerifyCredential::class
            ],
        ],
    ],

    'service_manager' => [
        'factories' => [
            \Zend\Authentication\AuthenticationService::class =>
                Factory\AuthenticationServiceFactory::class
        ]
    ],

    Module::class => [

    ],
];
