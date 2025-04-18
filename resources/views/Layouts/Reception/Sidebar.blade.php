<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
  <ul id="sidebarnav">
      <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Home</span>
      </li>
      <li class="sidebar-item">
          <a class="sidebar-link" href="{{ route('reception.index') }}" aria-expanded="false">
              <span>
                  <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
          </a>
      </li>

      <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Services</span>
      </li>

      <style>
          .sidebar-link {
              display: flex;
              align-items: center;
              justify-content: space-between;
              cursor: pointer;
          }

          .arrow-icon {
              transition: transform 0.3s ease;
          }

          .sidebar-details[open] .arrow-icon {
              transform: rotate(180deg);
          }
      </style>

    <li class="sidebar-item">
          <details class="sidebar-details">
              <summary class="sidebar-link">
                  <span>
                    <i class="ti ti-medical-cross"></i>

                  </span>
                  <span class="hide-menu">Service</span>
                  <i class="ti ti-chevron-down arrow-icon"></i>
              </summary>
              <ul style="padding-left: 1rem; list-style: none;">
                 
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.service.index') }}">
                          <span class="hide-menu">Service Table</span>
                      </a>
                  </li>

                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.service.create') }}">
                          <span class="hide-menu">Create Service</span>
                      </a>
                  </li>

              </ul>
          </details>
    </li> 

    <li class="sidebar-item">
          <details class="sidebar-details">
              <summary class="sidebar-link">
                  <span>
                    <i class="ti ti-file-description"></i>

                  </span>
                  <span class="hide-menu">Medical Record</span>
                  <i class="ti ti-chevron-down arrow-icon"></i>
              </summary>
              <ul style="padding-left: 1rem; list-style: none;">
                 
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.medical-record.index') }}">
                          <span class="hide-menu">Medical Record Table</span>
                      </a>
                  </li>

                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.medical-record.create') }}">
                          <span class="hide-menu">Create Medical Record</span>
                      </a>
                  </li>

              </ul>
          </details>
    </li> 

      <li class="sidebar-item">
          <details class="sidebar-details">
              <summary class="sidebar-link">
                  <span>
                    <i class="ti ti-calendar-event"></i>
                  </span>
                  <span class="hide-menu">Appointment</span>
                  <i class="ti ti-chevron-down arrow-icon"></i>
              </summary>
              <ul style="padding-left: 1rem; list-style: none;">
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.appointments.create') }}">
                          <span class="hide-menu">Create New</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.appointments.index') }}">
                          <span class="hide-menu">All</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.appointments.index', 'pending') }}">
                          <span class="hide-menu">Pending</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.appointments.index', 'cancelled') }}">
                          <span class="hide-menu">Cancelled</span>
                      </a>
                  </li>
                  <li class="sidebar-item">
                      <a class="sidebar-link" href="{{ route('reception.appointments.index', 'completed') }}">
                          <span class="hide-menu">Completed</span>
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
