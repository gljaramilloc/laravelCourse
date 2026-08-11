@extends('layouts.app') 
@section('title', $title) 
@section('subtitle', $subtitle) 
@section('content') 

<div class="container"> 
  <div class="row"> 
    <div class="col-lg-4 ms-auto"> 
      <p class="lead"><strong>Nombre:</strong> {{ $name }}</p> 
      <p class="lead"><strong>Teléfono:</strong> {{ $phone }}</p> 
    </div> 
    <div class="col-lg-4 me-auto"> 
      <p class="lead"><strong>Dirección:</strong> {{ $address }}</p>  
    </div>    
  </div> 
</div> 

@endsection