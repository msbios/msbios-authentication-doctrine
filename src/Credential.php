<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Authentication\Doctrine;

use MSBios\Authentication\IdentityInterface;
use Zend\Crypt\Password\Bcrypt;

/**
 * Class Credential
 * @package MSBios\Authentication\Doctrine
 */
class Credential
{
    /**
     * @param IdentityInterface $identity
     * @param $inputPassword
     * @return bool
     */
    public static function verify(IdentityInterface $identity, $inputPassword)
    {
        return (new Bcrypt)->verify($inputPassword, $identity->getPassword());
    }
}
