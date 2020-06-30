<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Empresa;
use App\User;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfil = Empresa::find(Auth()->id());
        return view('perfil')->with(compact('perfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $perfil->estado='0';
        $perfil->user_id =Auth()->id();
        $perfil->save();
        //return $request->all();
        return (redirect (route('perfil'))->with('fm-success','Perfil criado com sucesso'));
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $perfil){
        return view();
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update (Empresa $perfil){
        return view();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        return view();
    }
}
