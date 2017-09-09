<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Authentication\Doctrine;

use MSBios\Authentication\IdentityInterface;
use Zend\Crypt\Password\Bcrypt;

/**
 * Class VerifyCredential
 * @package MSBios\Authentication\Doctrine
 */
class VerifyCredential
{
    /**
     * @param IdentityInterface $identity
     * @param $inputPassword
     * @return bool
     */
    public static function __invoke(IdentityInterface $identity, $inputPassword)
    {
        return (new Bcrypt)->verify($inputPassword, $identity->getPassword());
    }
}
