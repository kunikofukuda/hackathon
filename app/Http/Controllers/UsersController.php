<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // add

use App\Event;

use Calendar;

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
                $events = [];
        $data = Event::where('user_id', $id)->get();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        

        $data = [
            'user' => $user,
            'microposts' => $microposts,
            'calendar'=>$calendar,
        ];

        $data += $this->counts($user);

        return view('users.show', $data);
    }
    
    public function edit($id)
    {
        $user = User::find($id);
        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);
        // $calendar=Event::all();
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => 'pass here url and any route',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        
        
        
        // return view('fullcalender',['calendar'=>$calendar]);

        $data = [
            'user' => $user,
            'microposts' => $microposts,
            'calendar'=>$calendar,
        ];

        $data += $this->counts($user);

        return view('users.edit', $data);
    }
    
    
}