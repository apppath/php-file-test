@extends('layouts.app')
@section('content')
<h3 class="text-primary">Product Add</h3>

<div class="card bg-light">
<div class="card-body">

{{ Form::open(['action' => 'ShopController@store' , 'method'=>'POST']) }}

 <div class="form-group">
      {{Form::text('title' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Name Here ...'])}}
 </div>

 <div class="form-group">
      {{Form::text('brand' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Brand Here ...'])}}
 </div>

<div class="form-group">
      {{Form::text('price' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Price Here ...'])}}
 </div>

<div class="form-group">
      {{Form::text('images' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Image Url Here ...'])}}
 </div>

 <div class="form-group">
      {{Form::textarea('details' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Task Title'])}}
 </div>

 <div class="form-group">
      {{Form::submit('Add Product' , ['class'=>'btn btn-block btn-success'])}}
 </div>
 
{{ Form::close() }}


<br>
</div>
</div>
<br>
@endsection
