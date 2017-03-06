<?php

namespace App\Http\Controllers;

use Auth;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Travel;
use Carbon\Carbon;


class TravelController extends Controller
{

    /**
     * Travel Controller
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $input = $request->all();

        echo "hello";
        print_r($input);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('offeraride.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd(Auth::id());

        $this->validate($request, [
            'pickup'            => 'required',
            'dropoff'           => 'required',
            'travel_date'       => 'required',

            'number_of_seats'   => 'required|integer|not_in:0',
            'team_support'      => 'required',
            'match_day'         => 'required',

        ]);

        if($request->round_trip == null){
            $request->round_trip = 0;
        } 

        $travel_date = Carbon::createFromFormat('d/m/Y H:i', $request->travel_date['date'] .' '.$request->travel_date['hour'].':'.$request->travel_date['min']);
        $return_date = Carbon::createFromFormat('d/m/Y H:i', $request->return_date['date'] .' '.$request->return_date['hour'].':'.$request->return_date['min']);

        $create = Travel::create([
                    'user_id'           => Auth::id(),
                    'pickup'            => $request->pickup,
                    'dropoff'           => $request->dropoff, 
                    'travel_date'       => $travel_date,
                    'return_date'       => $return_date,
                    'round_trip'        => $request->round_trip,
                    'contribution'      => $request->contribution,
                    'number_of_seats'   => $request->number_of_seats,
                    'ride_details'      => $request->ride_details,
                    'flexibility'       => $request->flexibility,
                    'team_support'      => $request->team_support,
                    'match_day'         => $request->match_day
                ]);

        echo $create;

        return redirect('/dashboard');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $travel = Travel::find($id);
        
        $travel_date = Carbon::parse($travel->travel_date);
        $start_date['date'] = $travel_date->format('d/m/y');
        $start_date['hours'] = $travel_date->format('H');
        $start_date['mins'] = $travel_date->format('i');


        $hours_value = [
            '0' => '00',
            '1' => '01',   
            '2' => '02',
            '3' => '03',       
            '4' => '04',
            '5' => '05',
            '6' => '06',
            '7' => '07',
            '8' => '08',
            '9' => '09',
            '10'=> '10',
            '11'=> '11',
            '12'=> '12',
            '13'=> '13',
            '14'=> '14',
            '15'=> '15',
            '16'=> '16',
            '17'=> '17',
            '18'=> '18',
            '19'=> '19',
            '20'=> '20',
            '21'=> '21',
            '22'=> '22',
            '23'=> '23',
        ];

        $mins_value = [
            '00' => '00',
            '10' => '10',
            '20' => '20',
            '30' => '30',
            '40' => '40',
            '50' => '50',
        ];

        $flexibility_value = [
            'ON_TIME' => 'Right on time', 
            'FIFTEEN_MINUTES' =>'In a 15 minutes window',
            'THIRTY_MINUTES' => 'In a 30 minutes window',
            'ONE_HOUR' => 'In a 1 hour window' 
        ];

        $seat_value = [
            '0' => '0',
            '1' => '1',
            '2' => '2',
            '3' => '3',
        ];


        if($travel->round_trip){
            $return_date = Carbon::parse($travel->return_date);
            $rdate['date'] = $return_date->format('d/m/y');
            $rdate['hours'] = $travel_date->format('H');
            $rdate['mins'] = $travel_date->format('i');
        }else{
            $rdate = [];
        }

        //dd($start_date);

        return view('offeraride.forms.edit', ['travel'      => $travel, 
                                              'travel_date' => $start_date, 
                                              'return_date' => $rdate,
                                              'flexibility' => $flexibility_value,
                                              'hours_value' => $hours_value,
                                              'mins_value'  => $mins_value,
                                              'seat_value'  => $seat_value 
                                              ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
