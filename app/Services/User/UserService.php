<?php


namespace App\Services\User;

use App\Repositories\User\UserRepository;

class UserService
{
    private $repository;

    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]
     */
    public function findAll()
    {
        return $this->repository
            ->all();
    }
}
