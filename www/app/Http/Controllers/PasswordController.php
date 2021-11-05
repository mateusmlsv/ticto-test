<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Models\User;
use App\Services\PasswordService;

class PasswordController extends Controller
{
    private $passwordService;

    public function __construct(PasswordService $passwordService)
    {
        $this->passwordService = $passwordService;
    }
    public function edit($id)
    {
        if (!$user = User::find($id)) {
            return redirect()->back();
        }
        return view('func.password.edit', compact('user'));
    }

    public function update(UpdatePasswordRequest $request, $id)
    {
        if (!$this->passwordService->update($id, $request->all())) {
            return redirect()
                ->route('password.edit', $id)
                ->withErrors(['Incorrect password']);
        }
        return redirect()
            ->route('password.edit', $id)
            ->with('message', 'Password updated successfuly');
    }
}
