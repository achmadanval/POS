<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

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
        //$user =UserModel::findOrFail(1);

        //$user = UserModel::where('level_id', 2)->count();
        /*$user =  UserModel::firstOrNew(  
            [
                'username' => 'manager33',
                'nama' => 'Manager Tiga Tiga ',
                'password' => hash::make('12345'),
                'level_id' => 2
            ]); */
            //$user->save();
        /*$user =  UserModel::firstOrNew(  
            [
                'username' => 'manager',
                'nama' => 'Manager ',
            ]);*/ 
        //dd($user);

        /* $user = UserModel::where('level_id', '>', 3) -> firstOr(function(){

        }); */

       // $user = UserModel::firstwhere('level_id',1);
       /* $user =  UserModel::create(  
            [
                'username' => 'manager11',
                'nama' => 'Manager11 ',
                'password' => hash::make('12345'),
                'level_id' => 2
            ]); 
            $user->username = 'manager12';
            
            $user->wasChanged();
            $user->wasChanged('username');
            $user->wasChanged(['username','level_id']);
            $user->wasChanged('nama');
            $user->wasChanged(['nama', 'username']);

       
           //return view('user',['data'=> $user]);
        } */

        $user = UserModel :: all();
        return view('user', ['data' => $user]);
    }
    public function tambah(){
        return view('user_tambah');
    }
    public function tambah_simpan(Request $request){
        UserModel::create([
            'username' => $request -> username,
            'nama' => $request -> nama,
            'password' => Hash::make($request->password),
            'level_id' => $request -> level_id
        ]);
        return redirect('/user'); 

        //dd($request->all());
    }
    public function ubah($id){
        $user = UserModel::find($id);
        return view ('user_ubah',['data' => $user]);
    }

    public function ubah_simpan($id , Request $request){
        $user = UserModel::find($id);

        $user->username = $request -> username;
        $user->nama = $request -> nama;
        $user->password = Hash::make ($request -> password);
        $user->level_id = $request -> level_id;

        $user -> save();

        return redirect('/user');
    }
    public function hapus($id){
        $user = UserModel::findorFail($id);
        $user -> delete();

        return redirect('/user');
    }
}
