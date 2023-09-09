<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
  <img class="img-profile rounded-circle shadow" style="width: 50px; height: 50px" src="{{ asset('resource/img/dssc_logo.png') }}">
    <div class="sidebar-brand-text mx-2 mt-3">
      <span>
        <sup class="">DSSC | SIMS<br><sup style="font-size:10px;">Administrator</sup></sup>
      </span>
    
  </div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ Request::is('dashboard') ? 'side-active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
  <li class="nav-item {{ Request::is('dashboard/studentrecord') ? 'side-active' : '' }}">
    <a class="nav-link" href="{{ route('studentrecord') }}">
    <i class="fa fa-list"></i>
      <span>Students Records</span></a>
  </li>

  <li class="nav-item {{ Request::is('dashboard/facultyrecord') ? 'side-active' : '' }}">
    <a class="nav-link" href="{{ route('facultyrecord') }}">
    <i class="fas fa-chalkboard-teacher"></i>
      <span>Faculty Records</span></a>
  </li>

  <li class="nav-item {{ Request::is('dashboard/staffrecord') ? 'side-active' : '' }}">
    <a class="nav-link" href="{{ route('staffrecord') }}">
    <i class="fas fa-user-tie"></i>
    &nbsp;<span>Staff Records</span></a>
  </li>

  <li class="nav-item {{ Request::is('dashboard/developer') ? 'side-active' : '' }}">
    <a class="nav-link" id="navlink" href="{{ route('developer') }}">
    <i class="fa fa-code"></i>
      <span>Developer Mode</span></a>
  </li>
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>