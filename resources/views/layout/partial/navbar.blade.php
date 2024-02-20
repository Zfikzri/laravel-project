<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid d-flex justify-content-between">
    

    @auth
    <div>
      <a class="navbar-brand" href="#">SMK RUS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/homelog">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/all">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/extraculiculer">Extraculiculer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/class/all">Class</a>
          </li>
        </ul>
      </div>
    </div>
    <div>
      <div class="dropdown">
        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome, {{ auth()->user()->name }}
        </button>
        <ul class="dropdown-menu">
          <li>
            <form method="post" action="/logout">
              @csrf
              <button type="submit" class="dropdown-item">Logout</button>
            </form>
          </li>
          <li>
            <button class="dropdown-item"><a href="/dashboard/index">Dashboard</a></button>
          </li>
        </ul>
      </div>
    </div>
    @else
    <div>
      <a class="navbar-brand" href="#">DATSIS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/student/all">Student</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/extraculiculer">Extraculiculer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/class/all">Class</a>
          </li>
        </ul>
      </div>
    </div>
    <div>
    <form class="d-flex gap-3" role="search">
        <a class="btn btn-success" href="/register">Register</a>
        <a class="btn btn-success" href="/login">Login</a>
    </form>
@endauth
  </div>
</nav>
