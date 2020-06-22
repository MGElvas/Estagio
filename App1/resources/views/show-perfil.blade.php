@extends('layouts.mylayout')

@include('incs.partials.perfil.home')

<div>
    <ul>
            <li>{{$perfil->nome}}</li>
            <li>{{$perfil->email}}</li>
            <li>{{$perfil->nTelemovel}}</li>
            <li>{{$perfil->morada}}</li>
            <li>{{$perfil->cdPostal}}</li>
            <li>{{$perfil->contacto}}</li>
            <li>{{$perfil->descricao}}</li>
    </ul>
</div>