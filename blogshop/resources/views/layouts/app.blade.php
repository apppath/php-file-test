@include('includes.header')
 <br>
<div class="container">
<div class="row">
<div class="col-md-12 col-lg-12">
  @include('includes.messages')	
  @yield('content')
</div>
</div>
</div>
@include('includes.footer')