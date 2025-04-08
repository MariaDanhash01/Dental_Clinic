<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="{{route('storeKeeperEmployee.index')}}" aria-expanded="false">
          <span>
            <i class="ti ti-layout-dashboard"></i>
          </span>
          <span class="hide-menu">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">UI COMPONENTS</span>
      </li>

      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <i class="ti ti-stethoscope"></i>
            </span>
            <span class="hide-menu">Doctors</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.doctor.index')}}">
                <span class="hide-menu">Doctor Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.doctor.create')}}">
                <span class="hide-menu">Create Doctor</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
     
    </ul>
  
{{--     
<!-- تضمين Bootstrap JS (مطلوب لتفعيل الـ collapse) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
  </nav>