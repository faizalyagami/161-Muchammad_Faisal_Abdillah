<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('/template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>



  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item">
        <a href="/" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/user" class="nav-link">
          <i class="fa-solid fa-user"></i>
          <p>
            Users
          </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="/student" class="nav-link">
          <i class="fa-solid fa-users"></i>
          <p>
            Mahasiswa
          </p>
        </a>
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fas fa-th"></i>
            <p>
              Activities
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/biodata" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Activities</p>
              </a>
            </li>
          </ul>
        </li>
  <!-- /.sidebar-menu -->
</div>
