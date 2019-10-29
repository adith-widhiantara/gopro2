<?php

namespace App\Http\Controllers;

use App\coba;
use App\User;
use Illuminate\Http\Request;

class CobaController extends Controller
{
    public function coba()
    {
      $Users = User::all();
      return view('account.read', compact('Users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function show(coba $coba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function edit(coba $coba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coba $coba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coba  $coba
     * @return \Illuminate\Http\Response
     */
    public function destroy(coba $coba)
    {
        //
    }
}
