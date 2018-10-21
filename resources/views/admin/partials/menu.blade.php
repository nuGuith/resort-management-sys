@if ( auth()->user()->role === 10)
<li class="nav-item mT-30">
    <a class='sidebar-link' href="{{ route(ADMIN . '.dash') }}" default>
        <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
        </span>
        <span class="title">Dashboard</span>
    </a>
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
    <a class='sidebar-link' href="{{ route(ADMIN . '.schedule') }}">
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
    <a class='sidebar-link' href="{{ route(ADMIN . '.users.edit', auth()->user()->id) }}">
        <span class="icon-holder">
          <i class="c-brown-500 ti-user"></i>
        </span>
        <span class="title">My Account</span>
    </a>
</li>
@endif
<!-- <li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.email.index') }}">
      <span class="icon-holder">
        <i class="c-brown-500 ti-email"></i>
      </span>
      <span class="title">Email</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.compose.index') }}">
      <span class="icon-holder">
        <i class="c-blue-500 ti-share"></i>
      </span>
      <span class="title">Compose</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.calendar.index') }}">
      <span class="icon-holder">
        <i class="c-deep-orange-500 ti-calendar"></i>
      </span>
      <span class="title">Calendar</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.chat.index') }}">
      <span class="icon-holder">
        <i class="c-deep-purple-500 ti-comment-alt"></i>
      </span>
      <span class="title">Chat</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.charts.index') }}">
      <span class="icon-holder">
        <i class="c-indigo-500 ti-bar-chart"></i>
      </span>
      <span class="title">Charts</span>
    </a>
</li>
<li class="nav-item">
    <a class='sidebar-link' href="{{ route(ADMIN . '.forms.index') }}">
      <span class="icon-holder">
        <i class="c-light-blue-500 ti-pencil"></i>
      </span>
      <span class="title">Forms</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="sidebar-link" href="{{ route(ADMIN . '.ui.index') }}">
      <span class="icon-holder">
          <i class="c-pink-500 ti-palette"></i>
        </span>
      <span class="title">UI Elements</span>
    </a>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
        <i class="c-orange-500 ti-layout-list-thumb"></i>
      </span>
      <span class="title">Tables</span>
      <span class="arrow">
        <i class="ti-angle-right"></i>
      </span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a class='sidebar-link' href="{{ route(ADMIN . '.basic-table.index') }}">Basic Table</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ route(ADMIN . '.datatable.index') }}">Data Table</a>
      </li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
          <i class="c-purple-500 ti-map"></i>
        </span>
      <span class="title">Maps</span>
      <span class="arrow">
          <i class="ti-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a href="{{ route(ADMIN . '.google-maps.index') }}">Google Map</a>
      </li>
      <li>
        <a href="{{ route(ADMIN . '.vector-maps.index') }}">Vector Map</a>
      </li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
          <i class="c-red-500 ti-files"></i>
        </span>
      <span class="title">Pages</span>
      <span class="arrow">
          <i class="ti-angle-right"></i>
        </span>
    </a>
    <ul class="dropdown-menu">
      <li>
        <a class='sidebar-link' href="{{ route(ADMIN . '.blank.index') }}">Blank</a>
      </li>     
      <li>
        <a class='sidebar-link' href="{{ route(ADMIN . '._404.index') }}">404</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ route(ADMIN . '._500.index') }}">500</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ route(ADMIN . '.signin.index') }}">Sign In</a>
      </li>
      <li>
        <a class='sidebar-link' href="{{ route(ADMIN . '.signup.index') }}">Sign Up</a>
      </li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="dropdown-toggle" href="javascript:void(0);">
      <span class="icon-holder">
        <i class="c-teal-500 ti-view-list-alt"></i>
      </span>
      <span class="title">Multiple Levels</span>
      <span class="arrow">
        <i class="ti-angle-right"></i>
      </span>
    </a>
    <ul class="dropdown-menu">
      <li class="nav-item dropdown">
        <a href="javascript:void(0);">
          <span>Menu Item</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a href="javascript:void(0);">
          <span>Menu Item</span>
          <span class="arrow">
            <i class="ti-angle-right"></i>
          </span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a href="javascript:void(0);">Menu Item</a>
          </li>
          <li>
            <a href="javascript:void(0);">Menu Item</a>
          </li>
        </ul>
      </li>
    </ul>
</li> -->
