<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Sport;
use App\Fixture;
use App\User;
use Auth;

class FixtureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sports = $this->sports();

        //echo 'hi';
        //dd($sports);
        return view('templates.findaride', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('templates.selectamatch');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->fixture);
        $user_id = Auth::id();
        //dd($user_id);
        $user = User::find($user_id);
        $user->fixtures()->sync([$request->fixture]);
        //dd($user);	



        //Fixture


        return redirect()->route('offeraride', ['fixture_id' => $request->fixture]);
    }


    /**
     * Fetch list of sport
     * 
     * @return \Illuminate\Http\Response
     */
    public function sports()
    {	
    	$sports = Sport::all();
    	return Response::json($sports, 200);
    }
}
