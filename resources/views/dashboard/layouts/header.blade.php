<header class="navbar sticky-top flex-md-nowrap shadow-sm mb-1">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 fs-6 px-3" href="#">Learn Laravel</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> dsadsa</span>
  </button>
  <div class="col-lg-8">
    <input class="form-control form-control w-100" type="text" placeholder="Search" aria-label="Search">
  </div>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
        @csrf
        <button type="submit" class="nav-link border-0 px-3 rounded"><i class="bi bi-box-arrow-right"></i> Logout</button>
      </form>
    </div>
  </div>
</header>
