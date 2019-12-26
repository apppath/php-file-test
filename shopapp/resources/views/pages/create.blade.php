@extends('layouts.app')
@section('content')
<h3 class="text-primary">Product Add</h3>


<div class="card bg-light">
<div class="card-body">

{{ Form::open(['action' => 'ShopController@store' , 'method'=>'POST']) }}

<!-- <div class="form-group">
      {{Form::text('title' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Task Title'])}}
 </div>

 <div class="form-group">
      {{Form::textarea('description' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Task Title'])}}
 </div>

 <div class="form-group">
      {{Form::text('due' , '' ,['class'=>'form-control' , 'placeholder' => 'Enter Due Date'])}}
 </div>

 <div class="form-group">
      {{Form::submit('Add Product' , ['class'=>'btn btn-primary'])}}
 </div>
 -->
{{ Form::close() }}


<br>
</div>
</div>
<br>
@endsection
