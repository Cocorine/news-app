<?php

namespace App\Services;

use App\Repositories\AuthRepository;
use Core\Services\Contracts\BaseService;
use Core\Services\Interfaces\AuthServiceInterface;

class AuthService extends BaseService /* implements AuthServiceInterface */
{

    /**
     * @var service
     */
    protected $authService;

    /**
     * AuthService constructor.
     *
     * @param AuthRepository $authRepository
     */
    public function __construct(AuthRepository $authRepository)
    {
        parent::__construct($authRepository);

    }

}
