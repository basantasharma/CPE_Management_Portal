<nav class="app-header navbar navbar-expand bg-body sticky-top">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a></li>
        <li class="nav-item d-none d-md-block"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Offers</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
    </ul>
    <!--end::Start Navbar Links-->
    <ul class="navbar-nav">
      @auth
      <li class="nav-item d-none d-md-block"><a href="/" class="nav-link">Profile</a></li>
      <li class="nav-item d-none d-md-block"><a href="/logout/" class="nav-link">Log Out</a></li>
      @else
      <li class="nav-item d-none d-md-block"><a href="/login/" class="nav-link">Log in</a></li>
      @endauth
  </ul>
    
  </div><!--end::Container-->
</nav><!--end::Header-->