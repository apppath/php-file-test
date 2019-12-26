@extends('layouts.app')
@section('content')
<h3 class="text-primary">Product List</h3>

@foreach($shops as $shop)
<div class="card mb-3">
<div class="card-body text-white">
 
 <div class="row">
 	
 	<div class="col-md-2 col-lg-2">
 		<img class="img-fluid" src="{{$shop->images}}" alt="Chania">
 	</div>

 	<div class="col-md-10 col-lg-10">
 		
 	<h3 class="text-danger"><a href="shops/{{$shop->id}}">{{$shop->title}}</a></h3>
        <h5 class="text-secondary float-right"><b>{{$shop->brand}}</b></h5><br><br>
        <p class="text-dark text-justify">{{$shop->details}}</p>
        <h5 class="text-danger float-right">PKR {{$shop->price}}</h5>

        <br>
        <br>
        <hr class="bg-info" style="height: 2px;">
        <a href="shops/{{$shop->id}}/edit" class="btn btn-primary float-left" role="button">Edit Shop</a>
	{!! Form::open(['action' => ['ShopController@destroy' , $shop->id] , 'method' =>'POST']) !!}
          {{Form::hidden('_method' , 'DELETE')}}
                {{ Form::Submit('Remove Shop' , ['class'=>'btn btn-danger float-right']) }}                
        {!! Form::close() !!}                		

 	</div>

 </div>

<br>
</div>
</div>
<br>
@endforeach
<br>
@endsection
