<?php

namespace Auth0\JWTAuthBundle\Security\Core;

use stdClass;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

/**
 * @author german
 */
interface JWTUserProviderInterface extends UserProviderInterface
{
    /**
     * Loads the user for the given decoded JWT.
     *
     * This method must throw JWTInfoNotFoundException if the user is not
     * found.
     *
     * @param object $jwt The decoded Json Web Token
     *
     * @return UserInterface
     *
     * @throws JWTInfoNotFoundException if the user is not found
     */
    public function loadUserByJWT(object $jwt): UserInterface;
}
