<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        /* i need get the user with his address */
        $users = User::join('user_domicilio', 'user_domicilio.user_id', '=', 'users.id')
             ->select('users.*', DB::raw('TIMESTAMPDIFF(YEAR, users.fecha_nacimiento, CURDATE()) AS edad'))
             ->get();

        return response()->json($users);
    }
}
