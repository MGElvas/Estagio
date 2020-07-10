@extends('layouts.mylayout')
@include('incs.partials.perfil.mhome')
<section >
    <body style="background-color:#555555;">
        @guest
            <h1>Faça login para ter acesso a esta pagina</h1>
        @else
            @if(isset($perfil))
                <br>
                <h1 style="color:white">nome da empresa : {{$perfil->nome}}</h1>
                <h1 style="color:white">email da empresa : {{$perfil->email}}</h1>
                <h1 style="color:white">telemovel da empresa : {{$perfil->nTelemovel}}</h1>
                <h1 style="color:white">pessoa de contacto : {{$perfil->contacto}}</h1>
                <h1 style="color:white">morada : {{$perfil->morada}}</h1>
                <h1 style="color:white">codigo postal : {{$perfil->cdPostal}}</h1>
                <h1 style="color:white">numero contribuinte : {{$perfil->nContribuinte}}</h1>
                <br>

            @else
                <h1  style="color:white">Crie o seu perfil empresarial primeiro.</h1>
            <br>
            @endif

        @endguest
    </body>
</section
