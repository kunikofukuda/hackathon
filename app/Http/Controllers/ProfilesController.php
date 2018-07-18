<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Date;

use DB;

class ProfilesController extends Controller
{
    public function store(Request $request)
    {
    //  print '<pre>';
    //  return print $request->date;
      // $this->validate($request, [
        //    'content' => 'required|max:191',
        //]);
        
        Date::create([
            'date_id'=> $request->date,
            'user_id'=> $request->id,
            'HIMA'=> $request->free,
            ]);
        
// $calendars=DB::table('dates')->where('date_id', $request->date)->first();
        
       
        // $data  =  $calendars->HIMA;  
            // 'date_id' => $request->pref_id,
    
         return redirect('users/'.$request->id);
        //  return redirect('users.show', ['value' => $data]);
    }


     public function show()
    {
        
        $dates = Date::all();
        $value =  $request->date;
        return view('users.show');

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
}