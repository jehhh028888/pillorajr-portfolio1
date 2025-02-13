<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')) {
           User::uploadAvatar($request->image);
           return redirect()->back()->with('message', 'Image Uploaded.');
        }

        return redirect()->back()->with('error', 'Image not Uploaded.');
    }
    public function index()
    {
        $data = [
            'name' => 'Jr',
            'email' => 'vpillorajr@gbox.adnu.edu.ph',
            'password' => 'jehp0828'    
        ];

        //User::create($data);

        //$user           = new User();
        //$user->name     =  'jeh';
        //$user->email    =  'jrpillora@gmail.com';
        //$user->password =  bcrypt('09484573620');
    // $user->save();

        $user = User::all();
        return $user;

        //User::where('id', 2)->delete();

        //User::where('id', 3)->update(['name' =>'Jeh']);

        //DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['jeh', 'jrpillora@gmail.com', '09484573620']);
        //$users = DB::select('select * from users');
        //return $users;

        //DB::update('update users set name = ? where id = 1', ['jehp']);

        //DB::delete('delete from     users where id = 1');

    // $users = DB::select('select * from users');
        //return $users;
        return view('dashboard.home');
    }
}
