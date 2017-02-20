<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Travel;

use Carbon\Carbon;


class TravelController extends Controller
{
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

        return view('templates.offeraride');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //dd($request->all());    

        $travel_date = Carbon::createFromFormat('d/m/Y H:i', $request->travel_date['date'] .' '.$request->travel_date['hour'].':'.$request->travel_date['min']);
        $return_date = Carbon::createFromFormat('d/m/Y H:i', $request->return_date['date'] .' '.$request->return_date['hour'].':'.$request->return_date['min']);

        $create = Travel::create([
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

        return Response('lets travel');   
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
        //
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
