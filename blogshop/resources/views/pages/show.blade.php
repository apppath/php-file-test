@extends('layouts.app')
@section('content')
<h3 class="text-primary">Product List</h3>

<div class="card bg-light">
<div class="card-body text-white">
 
 <div class="row">
 	
 	<div class="col-md-2 col-lg-2">
 		<img class="img-fluid" src="{{$shop->images}}" alt="Chania">
 	</div>

 	<div class="col-md-10 col-lg-10">
 		
 		<h3 class="text-danger">{{$shop->title}}</h3>
        <h5 class="text-success float-right"><b>{{$shop->brand}}</b></h5><br>
        <h5 class="text-success"><b>Created Date : {{$shop->created_at}}</b></h5><br>
        <p class="text-primary text-justify">{{$shop->details}}</p>
        <h5 class="text-success"><b>Updated Date : {{$shop->updated_at}}</b></h5><br>
        <h5 class="text-danger float-right">PKR {{$shop->price}}</h5>

 	</div>

 </div>

<br>
</div>
</div>
<br>
@endsection