<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Http;

class UserDataMocky
{
    public function fillTable(): void
    {
        $user = User::count();

        if( $user >= 15) {
            return;
        }

        $response = Http::get('https://run.mocky.io/v3/ce47ee53-6531-4821-a6f6-71a188eaaee0');
        $data = $response->json();
        User::insert($data['users']);
    }
}
