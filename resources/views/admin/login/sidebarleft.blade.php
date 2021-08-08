      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Set Up
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url ('admin/experience') }}" class="nav-link {{ request()->is('admin/experience') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('admin/project') }}" class="nav-link {{ request()->is('admin/project') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('admin/training') }}" class="nav-link {{ request()->is('admin/training') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Training</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="{{ url ('admin/testemonial') }}" class="nav-link {{ request()->is('admin/testemonial') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Testemonial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('admin/contact') }}" class="nav-link {{ request()->is('admin/contact') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('admin/user') }}" class="nav-link {{ request()->is('admin/user') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Registration</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('admin/category') }}" class="nav-link {{ request()->is('admin/category') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog category</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url ('admin/post') }}" class="nav-link {{ request()->is('admin/post') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog post</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="{{ url ('admin/usersms') }}" class="nav-link {{ request()->is('admin/usersms') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Email</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url ('admin/slider') }}" class="nav-link {{ request()->is('admin/slider') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider Image</p>
                </a>
              </li>
       
            </ul>
          </li>
      
                
        </ul>
      </nav>