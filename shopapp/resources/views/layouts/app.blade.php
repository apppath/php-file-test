@include('include.header')
 <br>
<div class="container">
<div class="row">
<div class="col-md-8 col-lg-8">
  @include('include.messages')	
  @yield('content')
</div>
<div class="col-md-4 col-lg-4">
  @include('include.sidebar')
</div>
</div>
</div>
@include('include.footer')