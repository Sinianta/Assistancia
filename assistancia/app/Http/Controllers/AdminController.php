<?php

namespace App\Http\Controllers;

use App\Mail\InfoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Demandes;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= auth()->user()->id;
        $nbT = Demandes::where('status','Traitée')
            ->where('admin_key',$id)
            ->count();
        $nbR = Demandes::where('status','Rejetée')->where('admin_key',$id)->count();
        $acheve= $nbR+$nbT;
        $nbC = Demandes::where('status','en cour de Traitement')->where('admin_key',$id)->count();
        $total=$acheve+$nbC;

        $demandes = Demandes::where('status','en attente')->take(5)->get();

        return view('administrateurs.attentes',compact('demandes','nbC','total','acheve'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('super-user.ajoutAdmin');
    }

    /**$
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation du formulaire
        $validated=$request->validate([
            'prenom'=>'required',
            'nom'=>'required',
            'email'=>'required|unique:demandes,titre',
            'date_naissance'=>'required',
            'password'=> 'required',
            //'password'=> Hash::make($request->newPassword),
            'telephone'=>'required',
            'priorite'=>'required'

        ]);
        // instanciation de d$demandes à partir du formulaire
        // $user = new User($request->all());
        // identifier l'id d'un utilisateur dans phpMyAdmin et l'associer à l'utilisateur
        $passe= $validated['password'];
        $validated['password'] = Hash::make($validated['password']);
        $admin= User::create($validated);
        Mail::to($admin)->send(new InfoEmail($admin,$passe));
        return redirect()->route('connexion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iden= auth()->user()->id;
        $demandeEnCours= Demandes::where('admin_key',$iden)->get();
        return view('administrateurs.en-cour',compact('demandeEnCours'));
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
    public function destroy(User $admin)
    {
        $admin->deleteOrFail();
        return redirect()->route('connexion.index');
    }
}
