<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard*') ? 'active' : '' }}" href="/dashboard">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Documentation</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link {{ Request::is('/dashboard/experience*') ? 'active' : '' }}" href="/dashboard/experience">
          <i class="mdi mdi-file-document-box-outline menu-icon"></i>
          <span class="menu-title">Experience Management</span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- partial -->