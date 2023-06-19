<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;
use App\Models\User;
use Illuminate\Validation;


class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return Participant::all();
        //return View("participant.index");
        //return "liste des participants";
        $user = new user();
        $user ->nom="TOYI";
        $user ->prenom="Francois";
        $user ->contact=93516499;
        $user ->email="toyi@gmail.com";
        $user ->mot_de_passe="password";

        //$user ->save();

        /*$vari = User::updateOrCreate(["email" => $user -> email],
        ["nom" => $user -> nom, "prenom" => $user -> prenom,
         "contact" => $user-> contact,"mot_de_passe" => $user -> mot_de_passe]);*/


        /*$participant = new Participant();
        $participant ->id_participant = $vari ->id;
        $partici = Participant::updateOrCreate(["id_participant" => $participant -> id_participant]);*/
        //$participant ->save();

        $participants = Participant::all();
        //dd($participant);

        return view("participants.index")->with("list_participant", $participants);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("participants.create_or_edit");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validated = $request->validate([
            'nom' => 'required|max:3',
            'prenom'=> 'required|max:4',
            'contact'=> 'required|unique:users',
            'email' => 'unique:users',
            'mot_de_passe' => 'required|max:8',
        ]);
        //dd($validated);
        //dd("ok");
        $vari = User::updateOrCreate(["email"=>$request ->email],[
            "nom"=>$request -> nom,
            "prenom"=>$request->prenom,
            "contact"=>$request->contact,
            "mot_de_passe"=>$request->mot_de_passe
        ]);
        Participant::updateOrCreate(["id_participant" => $vari -> id]);
        return redirect()->route("participants.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Participant $participant)
    {
        //dd("vgfvcxcgvgf");
        return view("participants.create_or_edit")->with(["participan"=>$participant]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Participant $participant)
    {
        //dd("Particip");
        echo "je suis moi";
        $participant->delete();
        return redirect()->route("participants.index");
    }
}
