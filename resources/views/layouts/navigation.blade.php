<nav class="app-header navbar navbar-expand bg-body sticky-top" data-bs-theme="dark">
  <!--begin::Container-->
  <div class="container-fluid">
    <!--begin::Start Navbar Links-->
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="fa-solid fa-bars"></i></a></li>
        <li class="nav-item d-none d-md-block "><a href="/" class="nav-link @yield('home')">Home</a></li>
        {{-- <li class="nav-item d-none d-md-block"><a href="/offers" class="nav-link @yield('offers')">Offers</a></li> --}}
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link @yield('services')">Services</a></li>
        <li class="nav-item d-none d-md-block"><a href="#" class="nav-link @yield('contacts')">Contact</a></li>
    </ul>
    <!--end::Start Navbar Links-->
    <ul class="navbar-nav">
      @auth
      <li class="nav-item d-none d-md-block"><a href="/" class="nav-link @yield('profile')">Profile</a></li>
      <li class="nav-item d-none d-md-block"><a href="/logout/" class="nav-link">Log Out</a></li>
      @else
      <li class="nav-item d-none d-md-block"><a href="/login/" class="nav-link @yield('login')">Log in</a></li>
      @endauth
  </ul>
    
  </div><!--end::Container-->
</nav><!--end::Header-->