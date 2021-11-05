<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUser;
use App\Services\UserService;
use Illuminate\Http\Request;

class RegisteredUserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $users = $this->userService->all();

        return view('func.employee.index', compact('users'));
    }
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('func.employee.create');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreUpdateUser $request)
    {
        $this->userService->create($request->all());

        return redirect()
            ->route('employee.index');
    }

    public function edit($id)
    {
        if (!$user = $this->userService->find($id)) {
            return redirect()->back();
        }
        return view('func.employee.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
    }
}
