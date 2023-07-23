
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::asset("dashboard/dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                {{ trans('Sidebar.Dashboard') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('Sidebar.Dashboard') }}</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route("sections.index") }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                {{ trans('Sidebar.sections') }}
                <span class="right badge badge-danger">new</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                {{ trans('Sidebar.doctor') }}

              </p>
              <i class="right fas fa-angle-left"></i>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('doctors.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('Sidebar.doctor') }}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('doctors.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('Sidebar.add doctor') }}</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                {{ trans('Sidebar.services') }}
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('services.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('Sidebar.services') }}</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                {{ trans('Sidebar.Insurances') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('insurances.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ trans('Sidebar.Insurances') }}</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                {{ trans('Sidebar.pateint') }}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('patients.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{ trans('Sidebar.pateint') }}</p>
                </a>
              </li>

            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
