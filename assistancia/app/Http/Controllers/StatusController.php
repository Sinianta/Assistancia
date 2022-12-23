<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ClientEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Demandes;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= auth()->user()->id;
        // $demandes = Demandes::where();
        $demandes = Demandes::where('status','En cour de traitement')
            ->where('admin_key',$id)
            ->take(5)
            ->get();

        $nbT = Demandes::where('status','Traitée')
            ->where('admin_key',$id)
            ->count();
        $nbR = Demandes::where('status','Rejetée')->where('admin_key',$id)->count();
        $acheve= $nbR+$nbT;
        $nbC = Demandes::where('status','en cour de Traitement')->where('admin_key',$id)->count();
        $total=$acheve+$nbC;
        return view('administrateurs.en-cour',compact('demandes','nbC','acheve','total'));
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
        $request->validate([
            'title'=>'required|unique:status,titre',
            'statusDescription'=>'required',
            'demandes_id'=>'required'

        ]);

        // $status = new Status($request->all());

        // $status->saveOrFail();

        return redirect()->route('status.index');
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
    public function edit(Demandes $demande)
    {
        // $demande = Demandes::findOrFail($id);
        return redirect()->route('administrateurs.en-cour',compact('demande'));
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
        // $validatedData=$request->validate([
        //     'titre'=>'required',
        //     'description'=>'required',
        //     'reponse'=>'required',
        //     'user_id'=>'required',
        //     'status'=>'required',
        //     'admin_key'=>'required'
        // ]);

        $demande= Demandes::find($id);
        $input= $request->all();
        $demande->update($input);
        Mail::to($demande->user)->send(new ClientEmail($demande));
        return redirect()->route('status.index');
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
