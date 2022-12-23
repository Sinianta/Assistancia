<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demandes;

class superController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $demandeCour = Demandes::where('status','En cour de traitement')
            ->take(5)
            ->get();

        $demandes = Demandes::where('status','en attente')->take(5)->get();
        $demandeTrait = Demandes::where('status','Traitée')
        ->take(5)
        ->get();
        $demandeRejet = Demandes::where('status','Rejetée')
        ->take(5)
        ->get();

        $nbAt = Demandes::where('status','en attente')->count();
        $nbCour = Demandes::where('status','En cour de traitement')->count();
        $nbT = Demandes::where('status','Traitée')->count();
        $nbR = Demandes::where('status','Rejetée')->count();

        return view('Super-user.demandes',compact('nbT','nbR','nbAt','nbCour','demandeCour','demandes','demandeTrait','demandeRejet'));
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
        //
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
