<?php
/**
 * @access protected
 */

namespace MSBios\Authentication\Doctrine;

use MSBios\AutoloaderAwareInterface;
use MSBios\ModuleAwareInterface;
use MSBios\ModuleInterface;
use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;

/**
 * Class Module
 * @package MSBios\Authentication\Doctrine
 */
class Module implements ModuleInterface, ModuleAwareInterface, AutoloaderAwareInterface
{
    /** @const VERSION */
    const VERSION = '1.0.6';

    /**
     * @return mixed
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    /**
     * Return an array for passing to Zend\Loader\AutoloaderFactory.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return [
            AutoloaderFactory::STANDARD_AUTOLOADER => [
                StandardAutoloader::LOAD_NS => [
                    __NAMESPACE__ => __DIR__,
                ],
            ],
        ];
    }
}
