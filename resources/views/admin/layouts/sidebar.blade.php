<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link">
    <img src="/img/AdminLTELogo.png" alt="" class="brand-image">
    <span class="brand-text ml-2">EPW 2022 Admin</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="/admin/user/{{ auth()->user()->id }}/edit" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="/admin" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        @if (auth()->user()->role == 'Dev')
        <li class="nav-header">Administrator</li>
        <li class="nav-item">
          <a href="/admin/user" class="nav-link {{ Request::is('admin/user') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-user-lock"></i>
            <p>
              Admins List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/user/create" class="nav-link {{ Request::is('admin/user/create') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-user-plus"></i>
            <p>
              Add New Admin
            </p>
          </a>
        </li>
        @endif

        <li class="nav-header">Short Link</li>
        <li class="nav-item">
          <a href="/admin/shortlink" class="nav-link {{ Request::is('admin/shortlink') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-link"></i>
            <p>
              Short Links List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/shortlink/create" class="nav-link {{ Request::is('admin/shortlink/create') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-plus"></i>
            <p>
              Create New Link
            </p>
          </a>
        </li>

        <li class="nav-header">Open Recruitment</li>
        <li class="nav-item">
          <a href="/admin/applicant" class="nav-link {{ Request::is('admin/applicant') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-user-tie"></i>
            <p>
              Applicants List
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/priority" class="nav-link {{ Request::is('admin/priority') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-list-ol"></i>
            <p>
              Applicants Priority
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/admin/interview" class="nav-link {{ Request::is('admin/interview') ? 'active' : '' }}">
            <i class="nav-icon fas fa-fw fa-scroll"></i>
            <p>
              Interview Announcement
            </p>
          </a>
        </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>