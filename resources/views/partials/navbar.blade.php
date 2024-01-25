<nav class="navbar navbar-expand-lg bg-body-tertiary p-4 mb-5" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Nicholas Oongwidjaja</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }} " href="/About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "blog") ? 'active' : '' }} " href="/Blog">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }} " href="/Categories">Categories</a>
          </li>
        </ul>
        

        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard </a>
                <div class="dropdown-divider"></div>

                <form action="/logout" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout </button>
                </form>
              </div>
            </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-right"></i>Login</a>
            </li>
          @endauth
        </ul>


        
      </div>
    </div>
  </nav>