<!DOCTYPE html>
<html lang="en">

@include('backend.layouts.header')

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <a href="#" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">User CRM</span>
    </a>

    <div class="sidebar">
      @include('backend.layouts.navbar')
    </div>
   
  </aside>

  <div class="content-wrapper">
   
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{ route('admin.user.index') }}">Users</a></li>
            </ol>
          </div>
        </div>
      </div>
    </section>

  
    <section class="content">
      <div class="container-fluid">
        @include('backend.layouts.flash')
        @yield('contains')
       
      </div>
    </section>
  </div>
 
</div>

@include('backend.layouts.script')
</body>
</html>
