<li class="nav-item mT-30">
   <a class='sidebar-link' href="{{ url('/admin/dashboard') }}" default>
      <span class="icon-holder">
         <i class="c-blue-500 ti-home"></i>
      </span>
      <span class="title">Dashboard</span>
   </a>
</li>

<li class="nav-item">
   <a class='sidebar-link' href="{{ url('/admin/schedule') }}">
      <span class="icon-holder">
         <i class="c-orange-500 ti-calendar"></i>
      </span>
      <span class="title">Schedule</span>
   </a>
</li>

<li class="nav-item">
   <a class='sidebar-link' href="{{ url('/admin/reservations') }}">
      <span class="icon-holder">
         <i class="c-cyan-500 ti-list"></i>
      </span>
      <span class="title">Reservations</span>
   </a>
</li>

<li class="nav-item">
   <a class='sidebar-link' href="{{ url('/admin/sales') }}">
      <span class="icon-holder">
         <i class="c-green-500 ti-money"></i>
      </span>
      <span class="title">Sales</span>
   </a>
</li>

<li class="nav-item dropdown">
  <a class="dropdown-toggle" href="javascript:void(0);">
    <span class="icon-holder">
      <i class="c-teal-500 ti-view-list-alt"></i>
    </span>
    <span class="title">Maintenance</span>
    <span class="arrow">
      <i class="ti-angle-right"></i>
    </span>
  </a>
  <ul class="dropdown-menu">
    <li class="nav-item dropdown">
      <a href="{{ url('/admin/m/rooms') }}">
        <span>Rooms</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a href="{{ url('/admin/m/resort') }}">
        <span>Resort</span>
      </a>
    </li>
    <li class="nav-item dropdown">
      <a href="{{ url('/admin/m/prices') }}">
        <span>Reservation Prices</span>
      </a>
    </li>
  </ul>
</li>

<!-- <li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
            <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li> -->
