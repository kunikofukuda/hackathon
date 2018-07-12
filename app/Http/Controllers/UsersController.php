<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

class UsersController extends Controller
{
    public function index()
    {
       // $users = User::paginate(10);
        
        //return view('users.index', [
         //   'users' => $users,
        //]);
    
   // $data = [];
        if (\Auth::check()) {
            $user = \Auth::user();
            //$microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

            //$data = [
              //  'user' => $user,
              //  'microposts' => $microposts,
            //];
            //$data += $this->counts($user);
            //return view('users.index', $data);
            $users = User::paginate(10);
        
        return view('users.index', [
            'users' => $users,
            ]);
        }else {
            return view('welcome');
        }
    }    
   
    public function show($id)
    {
        $user = User::find($id);
        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'microposts' => $microposts,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'microposts' => $microposts,
        ];

        $data += $this->counts($user);

        return view('users.edit', $data);
    }
    
    
}