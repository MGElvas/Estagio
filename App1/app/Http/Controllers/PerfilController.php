<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\User;

class PerfilController extends Controller
{
    public function create(){
        return view();
    }
    
    public function store(Request $request){
        $perfil= new Empresa;
        $perfil->nome= request('nome');
        $perfil->email= request('email');
        $perfil->nTelemovel= request('nTelemovel');
        $perfil->morada= request('morada');
        $perfil->cdPostal= request('cdpostal');
        $perfil->contacto= request('pessoa_contacto');
        $perfil->nContribuinte= request('nContribuinte');
        $perfil->descricao= request('descricao');

        $perfil->save();
        //return $request->all();
        return (redirect (route('perfil'))->with('fm-success','Perfil criado com sucesso'));
    }
    
    public function show(Empresa $perfil){
        $perfil =User::find(0)->id;
        return view('show-perfil')->with(compact('perfil'));    
    }
    
    public function edit(Empresa $perfil){
        return view();
    }
    
    public function update (Empresa $perfil){
        return view();
    }

    public function destroy($id){
        return view();
    }
}
