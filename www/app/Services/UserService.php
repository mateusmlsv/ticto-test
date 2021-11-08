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

    public function update($id, $data)
    {
        if (!$user = $this->find($id)) {
            return false;
        }

        $data['password'] ? $data['password'] = Hash::make($data['password']) : null;
        if (!$data['password']) {
            unset($data['password']);
        }
        $data['admin'] = isset($data['admin']) ? true : false;

        return $user->update($data);
    }

    public function destroy($id)
    {
        if (!$user = $this->find($id)) {
            return false;
        }

        return $user->delete();
    }
}
