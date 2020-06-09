@extends('layouts.mylayout')

@include('incs.partials.perfil.home')
<tr>
    <td>{{$perfil->id}}</td>    
    <td>{{$perfil->user->name}} </td>
</tr> 