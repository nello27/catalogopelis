@extends('layout.master')

<?php $message=Session::get('message') ?>
@if($message == 'store')
@endif

<div class="alert alert-success alert-dismissible fade show" role="alert">
	Usuario creado exitosamente
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

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

    <td>
    	  		<a href="{{$user->id.'/edit'}}" class="btn btn-default"> Editar</a>
   	</td>

  </tbody>
  @endforeach
</table>
</div>

 @stop