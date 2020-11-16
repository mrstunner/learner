<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'Gordis',
            'email' => 'bbf1@gmail.com',
            'password' => 'password',
        ];
        //User::create($data);
        //$user = new User();
        //User::where('id',12)->delete;
        // $user -> name = 'Edvinas';
        // $user -> email = "email@email.com";
        // $user -> password = bcrypt("password");
        // $user -> save();
        User::where('id', 14)->update(['name' => 'test']);
        $user = User::all();
        return ($user);
    }
}
