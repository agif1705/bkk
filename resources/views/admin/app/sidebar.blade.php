<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link bg-white">
      <img src="{{ asset('image/logo.png') }}" alt="AdminLTE Logo" class="brand-image " style="opacity: .8">
      <span class="brand-text fw-bold font-weight-light">Bundo Kargo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel bg-gradiant mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('image/agif.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">UserName</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-box text-warning"></i>
              <p>
                OUT-Going
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/create" class="nav-link">
                  <i class="fas fa-plus-circle nav-icon text-primary"></i>
                  <p>List Booking</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/pickup" class="nav-link">
                  <i class="fas fa-shipping-fast nav-icon text-success"></i>
                  <p>Pick-Up</p>
                </router-link>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>