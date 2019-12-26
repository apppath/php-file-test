@extends('layouts.app')
@section('content')
<h3 class="text-primary">About Me!</h3>

<div class="card bg-light">
<div class="card-body">
 
 <div class="row">
 	
 	<div class="col-md-4 col-lg-4">
 		<img class="img-fluid" src="{!! asset('storage/images/profile.jpg') !!}" alt="Chania">
 	</div>

 <div class="col-md-8 col-lg-8">
 		
 		<b>Name</b>
 		<p>Muhammad Rafique</p>
 		<b>Email</b>
 		<p>rafique28mr@gmail.com</p>
 		<b>Mobile No#</b>
 		<p>+923041340338</p>
 		<b>Skills</b>
 		<p><span class="badge badge-pill badge-primary">Java Developer</span> <span class="badge badge-pill badge-secondary">PHP Developer</span>  <span class="badge badge-pill badge-success">Android Developer</span>  <span class="badge badge-pill badge-danger">Kotlin Developer</span>  <span class="badge badge-pill badge-warning">Javascript Developer</span>  <span class="badge badge-pill badge-info">Jquery Developer</span></p>
 		<b>About</b>
 		
 		<p class="text-dark text-justify">
 		
 		I’ve been working in software development for eight years. My current position is Senior Development Director at a software consulting company in Austin, Texas, a position I’ve held for just over six years.
        My progression was originally technical in nature — I started out as an Associate Programmer Analyst fresh out of college. Back in those days one of my favorite hobbies was making fun of the stupidity of management. Only much later did I discover I had an aptitude for management — and actually enjoyed it.

 	   </p>
 </div>

 </div>

<br>
</div>
</div>
<br>
@endsection