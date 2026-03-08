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

        /*$data = [
            'level_id' => 1,
            'username' => 'admin-2',
            'nama' => 'Admin 2',
            'password' => Hash::make('12345'),
        ];
        UserModel::create($data);*/

        $user = UserModel::findOr(5,['username', 'nama'], function(){
            abort(404);
        });

        /* $user = UserModel::where('level_id', '>', 3) -> firstOr(function(){

        }); */

       // $user = UserModel::firstwhere('level_id',1);
        return view('user',['data'=> $user]);
    }
}
