<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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
        $perfil =Empresa::where('id',$perfil);
        return view ('show-perfil',['perfil'=>$perfil]);
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
