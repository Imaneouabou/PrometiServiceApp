<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Espace Admin</sup></div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  <li class="nav-item"> 
      <i class=""></i>      
  </li>
  
  <li class="nav-item"> 
    <i class=""></i>      
  </li>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="{{ route('projets') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Projet</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('actualites') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Actualité</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{ route('clients') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Client</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('Offres') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Offre</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Profile</span></a>
  </li>
  
  
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
  
  
</ul>