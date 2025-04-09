<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./index.html" aria-expanded="false">
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
      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <i class="ti ti-medical-cross"></i>
            </span>
            <span class="hide-menu">Nurse</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.nurse.index')}}">
                <span class="hide-menu">Nurse Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.nurse.create')}}">
                <span class="hide-menu">Create Nurse</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <i class="ti ti-clipboard-check"></i> 
            </span>
            <span class="hide-menu">Receptionist</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.receptionist.index')}}">
                <span class="hide-menu">Receptionist Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.receptionist.create')}}">
                <span class="hide-menu">Create Receptionist</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <i class="ti ti-certificate"></i>
            </span>
            <span class="hide-menu">Specializations</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.specialization.index')}}">
                <span class="hide-menu">Specializations Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.specialization.create')}}">
                <span class="hide-menu">Create Specialization</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <i class="ti ti-building"></i>
            </span>
            <span class="hide-menu">Department</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.department.index')}}">
                <span class="hide-menu">Department Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.department.create')}}">
                <span class="hide-menu">Create Department</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <span>
                <!-- Replace with SVG icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-hospital" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M3 21l18 0" />
                  <path d="M5 21v-14l7 -4l7 4v14" />
                  <path d="M9 21v-8h6v8" />
                  <path d="M10 12h4" />
                  <path d="M12 10v4" />
                </svg>
              </span>
                          </span>
            <span class="hide-menu">clinic</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.clinic.index')}}">
                <span class="hide-menu">Clinic Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.clinic.create')}}">
                <span class="hide-menu">Create Clinic</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Store Keeper Employee</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.storeKeeperEmployee.index')}}">
                <span class="hide-menu">Employee Table</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.storeKeeperEmployee.create')}}">
                <span class="hide-menu">Create Store keeper Employee</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
      
      <li class="sidebar-item">
        <details>
          <summary class="sidebar-link">
            <span>
              <i class="ti ti-calendar-event"></i>
            </span>
            <span class="hide-menu">Appointment</span>
          </summary>
          <ul style="padding-left: 1rem; list-style: none;">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{route('admin.appointment.index')}}">
                <span class="hide-menu">Appointment Table</span>
              </a>
            </li>
          </ul>
        </details>
      </li>
      
      <li class="sidebar-item">
        <a class="sidebar-link" href="./ui-alerts.html" aria-expanded="false">
          <span>
            <i class="ti ti-alert-circle"></i>
          </span>
          <span class="hide-menu">Alerts</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./ui-card.html" aria-expanded="false">
          <span>
            <i class="ti ti-cards"></i>
          </span>
          <span class="hide-menu">Card</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./ui-forms.html" aria-expanded="false">
          <span>
            <i class="ti ti-file-description"></i>
          </span>
          <span class="hide-menu">Forms</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
          <span>
            <i class="ti ti-typography"></i>
          </span>
          <span class="hide-menu">Typography</span>
        </a>
      </li>
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">AUTH</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-login.html" aria-expanded="false">
          <span>
            <i class="ti ti-login"></i>
          </span>
          <span class="hide-menu">Login</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./authentication-register.html" aria-expanded="false">
          <span>
            <i class="ti ti-user-plus"></i>
          </span>
          <span class="hide-menu">Register</span>
        </a>
      </li>
      <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">EXTRA</span>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
          <span>
            <i class="ti ti-mood-happy"></i>
          </span>
          <span class="hide-menu">Icons</span>
        </a>
      </li>
      <li class="sidebar-item">
        <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
          <span>
            <i class="ti ti-aperture"></i>
          </span>
          <span class="hide-menu">Sample Page</span>
        </a>
      </li>
    </ul>
    <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
      <div class="d-flex">
        <div class="unlimited-access-title me-3">
          <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Upgrade to pro</h6>
          <a href="https://adminmart.com/product/modernize-bootstrap-5-admin-template/" target="_blank" class="btn btn-primary fs-2 fw-semibold lh-sm">Buy Pro</a>
        </div>
        <div class="unlimited-access-img">
          <img src="{{asset('Dashboard_assets/assets/images/backgrounds/rocket.png')}}" alt="" class="img-fluid">
        </div>
      </div>
    </div>
{{--     
<!-- تضمين Bootstrap JS (مطلوب لتفعيل الـ collapse) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}
  </nav>