<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use App\Event;

class EventsController extends Controller
{
    public function index()
    {
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
        
        
        
        return view('fullcalender',['calendar'=>$calendar]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'start_date' => 'required',
        ]);
    
        $event = new Event;
            $event->title = 'HIMA'; 
            $event->user_id = \Auth::user()->id;
            $event->start_date = $request->start_date;
            $event->end_date = $request->start_date;
            $event->save();
        // return redirect ('/');
       return redirect()->back();
        
    }
    
    public function destroy($id)
    {
        $event = Event::find($id);
        if (\Auth::user()->id === $event->user_id){
            $event->delete();
        }
         return redirect()->back();    }
}
    
   
