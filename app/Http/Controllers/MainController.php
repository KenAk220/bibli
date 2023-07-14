<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateFormRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\etudiant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(){
        
        $etudiants = etudiant::all();
        return view('index', [
            'etudiants' => $etudiants
        ]);
    }

    public function connexion(Request $request){
        
        $credentials = $request->validate([
            "email" => ['required', 'email'],
            "password" => ['required'],
            "confirm"=>['required']
        ]);
      
        //SELECT * FROM users WHERE email = $email && password = $password && confirm = $confirm
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('accueil');
       }else{
            return redirect()->back()->with('error', 'Information non reconnu');
       }
    }
    

    

    public function inscription(etudiant $etudiant,validateFormRequest $request){
        
        //dd($request);
        etudiant::create([
            "name" => $request->nom,
            "surname" => $request->prenom,
            "country" => $request->pays,
            "email" => $request->email,
            "password" => sha1($request->password),
            "confirm" => sha1($request->confirm)
        ]);
        
        return redirect()->route('accueil')->with('success', 'Enregistrer avec succes');
       
    }
}



/* Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('surname');
    $table->string('country');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->string('confirm');
    $table->rememberToken();
    $table->timestamps();
}); */