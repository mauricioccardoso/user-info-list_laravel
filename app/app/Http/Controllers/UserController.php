<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Services\UserDataMocky;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function store(UserStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            User::create($request->all());

            DB::commit();
        } catch (\Throwable $errors) {
            DB::rollBack();

            return redirect()->back()->with($errors);
        }

        return redirect()->back();
    }
}
