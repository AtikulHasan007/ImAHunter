<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('bikes')}}">
              <span data-feather="file"></span>
              Bikes
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{route('customers')}}">
              <span data-feather="file"></span>
             Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('bookings')}}">
              <span data-feather="file"></span>
            Bookings
            </a>
          </li>
          
        </ul>
      </div>
    </nav>
