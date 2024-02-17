<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuninate\Http\Response;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;


class UserController extends Controller
{




    public function index()
    {
        $users = User::all();

        $title = 'Users list';
        return view('users', compact('users', 'title'));
    }

    public function checkRole()
    {


        /**
         * @var User $user
         */

        $user = auth()->user();

        return $user->hasRole('admin') ? view('admin.office') : view('user.office');
    }
}
