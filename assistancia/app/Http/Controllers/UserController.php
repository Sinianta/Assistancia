<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Demandes;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = User::where('priorite','2')->get();
        $nbAt = Demandes::where('status','en attente')->count();
        $nbCour = Demandes::where('status','En cour de traitement')->count();
        $nbT = Demandes::where('status','Traitée')->count();
        $nbR = Demandes::where('status','Rejetée')->count();

        return view('Super-user.listAdmin',compact('admins','nbT','nbR','nbAt','nbCour'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
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
            'prenom'=>'required',
            'nom'=>'required',
            'email'=>'required|unique:demandes,titre',
            'date_naissance'=>'required',
            'password'=>'required',
            'telephone'=>'required',
            'priorite'=>'required'

        ]);
        // instanciation de d$demandes à partir du formulaire
        $user = new User($request->all());
        // identifier l'id d'un utilisateur dans phpMyAdmin et l'associer à l'utilisateur

        $user->saveOrFail();
        return redirect()->route('demande.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $demande= Demandes::where('admin_key',$id)->count();
        $demandeTrait= Demandes::where('admin_key',$id)->where('status','Traitée')->count();
        $demandeRejet= Demandes::where('admin_key',$id)->where('status','Rejetée')->count();

        $demandeCour= Demandes::where('admin_key',$id)->where('status','En cour de traitement')->count();

        return view('super-user.afficher',compact('demande','demandeTrait','demandeRejet','demandeCour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
