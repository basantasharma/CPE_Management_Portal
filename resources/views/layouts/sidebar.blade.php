<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="light"><!--begin::Sidebar Brand-->
  <div class="sidebar-brand"><!--begin::Brand Link--><a href="/" class="brand-link"><!--begin::Brand Image-->
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="212.000000pt" height="164.000000pt" viewBox="0 0 212.000000 164.000000" preserveAspectRatio="xMidYMid meet">
      <g transform="translate(0.000000,164.000000) scale(0.100000,-0.100000)">
      <path d="M741 1568 c-16 -35 -79 -171 -141 -303 -62 -132 -130 -277 -151 -323 l-38 -83 145 3 146 3 77 170 c43 94 82 170 86 170 5 0 137 -268 295 -595 l288 -595 331 -3 331 -2 0 575 0 575 -130 0 -130 0 0 -439 0 -439 -106 -7 c-58 -4 -109 -4 -114 1 -5 5 -157 310 -338 679 l-330 670 -96 3 -97 3 -28 -63z"/>
      <path d="M1850 1490 l0 -140 130 0 130 0 0 140 0 140 -130 0 -130 0 0 -140z"/>
      <path d="M282 618 c-100 -217 -275 -594 -279 -600 -2 -5 183 -8 411 -8 l415 0 90 160 91 160 -62 142 c-34 79 -67 149 -74 157 -11 12 -19 1 -52 -70 -22 -46 -63 -132 -90 -192 l-51 -107 -135 0 -135 0 19 43 c10 23 52 114 93 202 41 88 74 161 73 161 0 1 -65 5 -143 9 l-142 7 -29 -64z"/>
      </g>
  </svg>
    <!--begin::Brand Text-->
    <span class="brand-text fw-light">CPE Mngt. Portal</span>
    <!--end::Brand Text--></a><!--end::Brand Link-->
  </div><!--end::Sidebar Brand--><!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
      <nav class="mt-2"><!--begin::Sidebar Menu-->
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

            <li class="nav-item">
              <a href="/" class="nav-link @yield('home')"><i class="nav-icon fa-solid fa-house"></i>
                <p>Home</p>
              </a>
            </li>

            @auth  
            <li class="nav-item">
              <a href="/dashboard" class="nav-link @yield('dashboard')"><i class="nav-icon fa-solid fa-gauge-high"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/account" class="nav-link @yield('account')"><i class="nav-icon fa-solid fa-user-secret"></i>
                <p>Account</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/router" class="nav-link @yield('routersetting')"><i class="nav-icon fa-solid fa-wifi"></i>
                <p>Router Setting</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/support" class="nav-link @yield('support')"><i class="nav-icon fa-solid fa-ticket"></i>
                <p>Support</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="/timeline" class="nav-link @yield('timeline')"><i class="nav-icon fa-solid fa-timeline"></i>
                <p>Timeline</p>
              </a>
            </li>
            @endauth

            <li class="nav-item">
              <a href="/offers" class="nav-link @yield('offers')"><i class="nav-icon fa-solid fa-bullhorn"></i>
                <p>Offers</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link @yield('services')"><i class="nav-icon fa-solid fa-microchip"></i>
                <p>Services</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link @yield('contacts')"><i class="nav-icon fa-solid fa-phone-volume"></i>
                <p>Contacts</p>
              </a>
            </li>
            
            
              
              

          </ul><!--end::Sidebar Menu-->
      </nav>
  </div><!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->