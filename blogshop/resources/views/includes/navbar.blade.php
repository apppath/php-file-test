<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

 <div class="container">

<!-- Brand -->
  <a class="navbar-brand" href="/">
    <img src="{!! asset('storage/images/appIcon_@144.png') !!}" alt="Logo" style="width:40px;">
  </a>

<!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
      <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link {{Request::is('shops/create') ? 'active' : ''}}" href="/shops/create">Add</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="/about">About</a>
    </li>

  </ul>
  </div>

</nav>