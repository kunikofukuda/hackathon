<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function store(Request $request)
    {
      // $this->validate($request, [
        //    'content' => 'required|max:191',
        //]);
       $date = Date::find($id);
       $date->create();

        $request->user()->dates()->create([
            'date_id' => $request->pref_id,
        ]);

         return view('users.show', $data);
    }


     //public function show($id)
    //{
      //  $user = User::find($id);
        //$dates = $user->dates()//->orderBy('created_at', 'desc')->paginate(10);

        //$data = [
          //  'user' => $user,
            //'dates' => $dates,
    //    ];

        //$data += $this->counts($user);

      //  return view('users.show', $data);
    //}
}