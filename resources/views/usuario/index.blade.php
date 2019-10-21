@extends('layout.master')
@section('content')

 <div class="container">
<table class="table">

  <thead>

    <th>Nombre</th>
    <th>Correo</th>
    <th>Operación</th>
    

  </thead>

  @foreach($users as $user)

  <tbody>
    <td>{{$user->name}}</td>

    <td>{{$user->email}}</td>

    <td></td>
  </tbody>
  @endforeach
</table>
</div>

 @stop