@extends('layouts.mylayout')
@include('incs.partials.perfil.home')
<h1>Bem vindo ao seu perfil.</h1>
<h3>Are you {{$perfil->email}} ?</h3>