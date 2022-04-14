<?php

namespace Core\Services\Contracts;

use Illuminate\Database\Eloquent\Model;

/**
 * Interface AuthServiceInterface
 * @package Core\Services\Interfaces
 */

interface AuthServiceInterface
{
    

    /**
     * Instanciate Model
     *
     * @return Model
     */
    public function register(): Model;

    /**
     * Instanciate Model
     *
     * @return Mixed
     */
    public function login(): Mixed;

    /**
     * Instanciate Model
     *
     * @return Model
     */
    public function reset_password(): bool;
    

    /**
     * Disconnect the authenticated user
     *
     * @return JsonResponse
     */
    public function logout() : bool;
}