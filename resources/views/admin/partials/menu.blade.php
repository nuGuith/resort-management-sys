@if ( auth()->user()->role === 10)
<li class="nav-item mT-30">
    <a class='sidebar-link' href="{{ route(ADMIN . '.dashboard') }}" default>
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
</li>
<li class="nav-item">
   <a class='sidebar-link' href="{{ route(ADMIN . '.schedule.index') }}">
      <span class="icon-holder">
         <i class="c-orange-500 ti-calendar"></i>
      </span>
      <span class="title">Schedule</span>
   </a>
</li>

<li class="nav-item">
   <a class='sidebar-link' href="{{ route(ADMIN . '.reservations.index') }}">
      <span class="icon-holder">
         <i class="c-cyan-500 ti-list"></i>
      </span>
      <span class="title">Reservations</span>
   </a>
</li>

<li class="nav-item">
   <a class='sidebar-link' href="{{ route(ADMIN . '.sales.index') }}">
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
        <a href="{{ route(ADMIN . '.rooms.index') }}">
          <span>Rooms</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="{{ route(ADMIN . '.resort.index') }}">
          <span>Resort</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="{{ route(ADMIN . '.prices.index') }}">
          <span>Reservation Prices</span>
        </a>
      </li>
    </ul>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.users.index') }}">
        <span class="icon-holder">
          <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">Users</span>
    </a>
</li>
@elseif ( auth()->user()->role === 0)
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.messages.index') }}">
        <span class="icon-holder">
          <i class="c-green-500 ti-email"></i>
        </span>
        <span class="title">Messages</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.schedule.index') }}">
        <span class="icon-holder">
          <i class="c-deep-orange-500 ti-calendar"></i>
        </span>
        <span class="title">Schedule</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.reservation.index') }}">
        <span class="icon-holder">
          <i class="c-light-blue-500 ti-pencil"></i>
        </span>
        <span class="title">Reservation</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.resort') }}">
        <span class="icon-holder">
          <i class="c-purple-500 ti-map"></i>
        </span>
        <span class="title">The Resort</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.rooms') }}">
        <span class="icon-holder">
          <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Rooms</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.users.edit', auth()->user()->id) }}">
        <span class="icon-holder">
          <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">My Account</span>
    </a>
</li>
@endif
