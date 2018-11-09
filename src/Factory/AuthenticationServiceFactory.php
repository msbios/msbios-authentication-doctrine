<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Authentication\Doctrine\Factory;

use Interop\Container\ContainerInterface;
use MSBios\Authentication\AuthenticationService;
use MSBios\Authentication\Factory\AuthenticationServiceFactory as DefaultAuthenticationServiceFactory;
use Zend\Authentication\AuthenticationService as DefaultAuthenticationService;
use Zend\Authentication\AuthenticationServiceInterface;

/**
 * Class AuthenticationServiceFactory
 * @package MSBios\Authentication\Doctrine\Factory
 */
class AuthenticationServiceFactory extends DefaultAuthenticationServiceFactory
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return AuthenticationService|object|DefaultAuthenticationService|AuthenticationServiceInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        /** @var AuthenticationServiceInterface $authenticationService */
        $authenticationService = $container->get('doctrine.authenticationservice.orm_default');

        return parent::__invoke($container, $requestedName, $options)
            ->setStorage($authenticationService->getStorage())
            ->setAdapter($authenticationService->getAdapter());
    }
}
