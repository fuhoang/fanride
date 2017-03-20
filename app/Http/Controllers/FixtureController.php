<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * Fetch list of sport
     * 
     * @return \Illuminate\Http\Response
     */
    public function sports()
    {

    }
}
