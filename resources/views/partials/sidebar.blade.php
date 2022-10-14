<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('Homepage') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="	fas fa-user-alt"></i>
                    <span>{{ __('Dashboard') }}</span></a>
            </li>



            <!-- services -->
            <li class="nav-item {{ request()->is('admin/services') || request()->is('admin/services') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.services.index') }}">
                <i class="fas fa-folder-open"></i>
                    <span>{{ __('Services') }}</span></a>
            </li>

            <!-- employees -->
            <li class="nav-item {{ request()->is('admin/employees') || request()->is('admin/employees') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.employees.index') }}">
                <i class="	fas fa-user-edit"></i>
                    <span>{{ __('Employees') }}</span></a>
            </li>

            <!-- clients -->
            <li class="nav-item {{ request()->is('admin/clients') || request()->is('admin/clients') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.clients.index') }}">
                <i class="fas fa-cogs"></i>
                    <span>{{ __('Clients') }}</span></a>
            </li>

            <!-- appointments -->
            <li class="nav-item {{ request()->is('admin/appointments') || request()->is('admin/appointments') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.appointments.index') }}">
                <i class="fas fa-file-alt"></i>
                    <span>{{ __('appointments') }}</span></a>
            </li>

            <!-- calendar -->
            <li class="nav-item {{ request()->is('admin/calendar') || request()->is('admin/calendar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.calendar') }}">
                    <i class="fas fa-fw fa-calendar"></i>
                    <span>{{ __('Calendar') }}</span></a>
            </li>


        </ul>
