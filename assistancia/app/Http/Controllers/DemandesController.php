<?php

namespace App\Http\Controllers;


use App\Mail\adminEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\Demandes;
use Illuminate\Http\Request;

class DemandesController extends Controller
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
        $demandeCour = Demandes::where('status','En cour de traitement')
            ->where('user_id',$id)
            ->take(5)
            ->get();

        $demandes = Demandes::where('status','en attente')->where('user_id',$id)->take(5)->get();
        $demandeTrait = Demandes::where('status','Traitée')
        ->where('user_id',$id)
        ->take(5)
        ->get();
        $demandeRejet = Demandes::where('status','Rejetée')
        ->where('user_id',$id)
        ->take(5)
        ->get();
        $nbT = Demandes::where('status','Traitée')
            ->where('user_id',$id)
            ->count();
        $nbR = Demandes::where('status','Rejetée')->where('user_id',$id)->count();

        $nbA = Demandes::where('status','en attente')->where('user_id',$id)->count();

        return view('clients.voirDemande',compact('demandes','demandeCour','demandeTrait','demandeRejet','nbT','nbR','nbA'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients/faireDemande');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation du formulaire
        $request->validate([
            'titre'=>'required|unique:demandes,titre',
            'description'=>'required',
            'user_id'=>'required'

        ]);
        // instanciation de d$demandes à partir du formulaire
        $demandes = new Demandes($request->all());
        // identifier l'id d'un utilisateur dans phpMyAdmin et l'associer à l'utilisateur
        $demandes->saveOrFail();
        $admin= User::where('priorite','2')->get();
        Mail::to($admin)->send(new adminEmail($demandes));
        return redirect()->route('demande.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demandes  $demandes
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demandes= Demande::where('admin_key',$id)->count();
        return view('super-user.afficher',compact('demandes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demandes  $demandes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $demandes = Demandes::findOrFail($id);
        return redirect()->route('administrateurs.attentes',compact('demandes'));
        // return view('administrateurs.attentes',compact('demandes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demandes  $demandes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData=$request->validate([
            'titre'=>'required',
            'description'=>'required',
            'user_id'=>'required',
            'status'=>'required',
            'admin_key'=>'required'
        ]);

        Demandes::whereId($id)->update($validatedData);

        // $demandes->updateOrFail($request->all());
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demandes  $demandes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demandes $demande)
    {
        $demande->deleteOrFail();
        return redirect()->route('demande.index');
    }
}
