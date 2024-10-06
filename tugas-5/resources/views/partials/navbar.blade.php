<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <div class="container">
    <a class="navbar-brand text-primary" href="#">
      <h3 style="color: #0056b3; text-shadow: 2px 2px 10px #0056b3; font-size: 38px;">Cinemaville</h3>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="lg-collap collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-primary {{ ($active === 'home') ? 'active fw-bold' :  ''}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary {{ ($active === 'upcoming') ? 'active fw-bold' :  ''}}" aria-current="page" href="/upcoming">Upcoming</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary {{ ($active === 'theaters') ? 'active fw-bold' :  ''}}" aria-current="page" href="/theater">Theaters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary {{ ($active === 'order') ? 'active fw-bold' :  ''}}" aria-current="page" href="/order">Buy Tiket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-primary {{ ($active === 'promotions') ? 'active fw-bold' :  ''}}" aria-current="page" href="/promotions">Promotions</a>
        </li>
      </ul>
      <form action="/search" class="d-flex" method="get">
        <input id="searchnav" class="keyword form-control me-2 border-primary" type="text" placeholder="search movie, theater ..." name="keyword" aria-label="Search" size="20" autocomplete="off">
        <button class="tombol-cari btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-lg-50">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-primary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-primary" href="/dashboard"> <i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                  @csrf
                <button type="submit" class="dropdown-item text-primary"><i class="bi bi-box-arrow-right"></i> Logout</button>
              </form>
            </li>
          </ul>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link text-primary {{ ($active === 'login') ? 'active fw-bold' :  ''}} fs-5" aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>
  </div>
</nav>

<!-- akhir -->
