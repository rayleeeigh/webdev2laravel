<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\historics;
use App\Models\bucketlist;

class HistoricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historics = historics::all();

        return view('historics',[
            'historics' => $historics,
            'title' => 'Historical Sites'
        ]);
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
        $historic = new bucketlist();
        $historic->user_id = $request->input('hisID');
        $historic->bucketName = $request->input('hisName');
        $historic->bucketDesc = $request->input('hisDesc');
        $historic->bucketImage = $request->input('hisImage');
        $historic->bucketPrice = $request->input('hisPrice');
        $historic->bucketCity = $request->input('hisCity');
        $historic->bucketContact = $request->input('hisContact');
        $historic->bucketEmail = $request->input('hisEmail');
        $historic->bucketSite = $request->input('hisSite');
        $historic->save();

        return redirect('/services/historics');
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
