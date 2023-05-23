<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::join('user_domicilio', 'user_domicilio.user_id', '=', 'users.id')
             ->select('users.*', DB::raw('TIMESTAMPDIFF(YEAR, users.fecha_nacimiento, CURDATE()) AS edad'), 'user_domicilio.domicilio', 'user_domicilio.numero_exterior', 'user_domicilio.colonia', 'user_domicilio.cp', 'user_domicilio.ciudad')
             ->get();

        return response()->json($users);
    }
}
