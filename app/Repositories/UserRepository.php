<?php

namespace App\Repositories;

use App\Models\User;
use Core\Repository\Eloquents\EloquentRepository;

class UserRepository extends EloquentRepository
{
    
   /**
    * UserRepository constructor.
    *
    * @param User $user
    */
   public function __construct(User $user)
   {
       parent::__construct($user);
   }


}