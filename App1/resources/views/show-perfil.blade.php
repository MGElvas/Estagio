@extends('layouts.mylayout')

@include('incs.partials.perfil.home')

<div>
    <ul>
        @foreach($perfil as $i)
            <li>{{$i->nome}}</li>
            <li>{{$i->email}}</li>
            <li>{{$i->nTelemovel}}</li>
            <li>{{$i->morada}}</li>
            <li>{{$i->cdPostal}}</li>
            <li>{{$i->contacto}}</li>
            <li>{{$i->descricao}}</li>

        @endforeach
    </ul>
</div>