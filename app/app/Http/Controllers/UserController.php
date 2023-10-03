<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserDataMocky;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(
        protected UserDataMocky $userDataMocky
    ) {}

    public function index()
    {
        $this->userDataMocky->fillTable();

        $users = User::paginate(10);

        return view('users',[
            'users' => $users
        ]);
    }
}
