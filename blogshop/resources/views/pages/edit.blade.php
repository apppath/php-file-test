@extends('layouts.app')
@section('content')
<h3 class="text-primary">Product Edit</h3>

<div class="card bg-light">
<div class="card-body">

{!! Form::open(['action' => ['ShopController@update' , $shop->id] , 'method' =>'POST']) !!}

 <div class="form-group">
      {{Form::text('title' , $shop->title ,['class'=>'form-control'])}}
 </div>

 <div class="form-group">
      {{Form::text('brand' , $shop->brand ,['class'=>'form-control'])}}
 </div>

<div class="form-group">
      {{Form::text('price' , $shop->price ,['class'=>'form-control'])}}
 </div>

<div class="form-group">
      {{Form::text('images' , $shop->images ,['class'=>'form-control'])}}
 </div>

 <div class="form-group">
      {{Form::textarea('details' , $shop->details ,['class'=>'form-control'])}}
 </div>

 {{Form::hidden('_method' , 'PUT')}}
    <div class="form-group">
       {{Form::submit('Update Product' , ['class'=>'btn btn-primary'])}}
    </div> 
{{ Form::close() }}


<br>
</div>
</div>
<br>
@endsection