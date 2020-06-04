<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PerfilController extends Controller
{
    public function create(){
        return view();
    }
    
    public function store(){
        Perfil::create($this->val_perfil());
        return redirect(route(''))->with('fm-success','Perfil criado com sucesso');
    }
    
    public function show(Perfil $perfil){
        return view ('perfil.show')->with(compact('perfil'));
    }
    
    public function edit(Perfil $perfil){
        return view ('perfil.edit')->with(compact('perfil'));
    }
    
    public function update (Perfil $perfil){
        $perfil->update($this->val_perfil());
        return redirect (route(''))->with('fm-success','Perfil editado com sucesso');
    }

    public function destroy($id){
        Perfil::findOrFail($id)->delete();
        return redirect (route(''))->with('fm-success','Perfil eliminado com sucesso');
    }
}
