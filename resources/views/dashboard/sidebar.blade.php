<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>User</span>
          </h6>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/report') ? 'active' : '' }}" aria-current="page" href="/dashboard/report">
            <span data-feather="home"></span>
            Tabel Report
          </a>
        </li>
      </ul>
      @can('admin')
        
      
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Admin</span>
      </h6>
      <ul class="nav flex-column mb-2">
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <span data-feather="trello"></span>
                Tabel Post
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/users">
                <span data-feather="users"></span>
                Tabel User
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
              <span data-feather="list"></span>
              Tabel Categories
            </a>
        </li>
      </ul>
      @endcan
    </div>
  </nav>