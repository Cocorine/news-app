<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Core\Services\Contracts\BaseService;
use Core\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\DB;

class UserService extends BaseService implements UserServiceInterface
{

    /**
     * @var service
     */
    protected $userService;

    /**
     * UserService constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct($userRepository);

    }

}
