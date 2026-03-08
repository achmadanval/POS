<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        /*return view('profile')
            ->with('id',$id)
            ->with('name',$name);*/

        $data = [
            'level_id' => 2,
            'username' => 'Manager-3',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345'),
        ];
        UserModel::create($data);

        $user = UserModel::all();
        return view('user',['data'=> $user]);
    }
}
