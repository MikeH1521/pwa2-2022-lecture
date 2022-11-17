<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>
  
  
  
  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    
<div class="btn-group" role="group" >
  <a class="dropdown-item" href="{{route('language', 'en')}}">
    EN
  </a>
  <a class="dropdown-item" href="{{route('language', 'sk')}}">
    SK
  </a>
</div> 
    
    {{-- <li>{{Auth::user()->name}}</li> --}}
    {{Auth::user()->first_name}}&nbsp;{{Auth::user()->last_name}}
    <div class="topbar-divider d-none d-sm-block"></div>
    <a class="btn btn-outline-secondary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  
      <i class="icon me-2 cil-account-logout"></i>     
      {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
    </form>
    
    
  </ul>
  
</nav>