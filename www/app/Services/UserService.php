<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all()
    {
        return $this->userRepository->all();
    }

    public function find($id)
    {
        return $this->userRepository->find($id);
    }

    public function create($data)
    {
        $data['password'] = Hash::make($data['password']);
        $data['admin'] = isset($data['admin']) ? true : false;

        return $this->userRepository->create($data);
    }
}
