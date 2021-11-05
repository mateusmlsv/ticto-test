<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PasswordService
{
    public function update($userId, $data)
    {
        if (!$user = User::find($userId)) {
            return redirect()->back();
        }

        if (!Hash::check($data['old_password'], $user->password)) {
            return false;
        }

        $user->password = Hash::make($data['password']);

        return $user->update();
    }
}
