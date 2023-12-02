<nav class="navbar navbar-expand-md fixed-top px-5" style="padding: 0px; height: 67px">
    <div class="container inner-navbar d-flex justify-content-between">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="black" class="bi bi-list" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>

      </button>
      <a href="#home" class="d-flex text-decoration-none">
        <img src="{{ url("assets/images/img/Lambang glx6.png") }}" alt="" class="logo" />

      </a>



      <div class="collapse navbar-collapse menu rounded-2 justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item nav-hover-1">
            <a style="" class="nav-link" href="{{ url("#home") }}">Beranda</a>
          </li>
          <li class="nav-item nav-hover-1">
            <a style="" class="nav-link" href="{{ url("#lomba") }}">Lomba</a>
          </li>
          <li class="nav-item nav-hover-1">
            <a style="" class="nav-link" href="{{ url("#skema") }}">Skema</a>
          </li>
          <li class="nav-item nav-hover-1">
            <a style="" class="nav-link" href="{{ url("#faq") }}">FAQ</a>
          </li>
          <li class="nav-item nav-hover-1 d-md-none d-block">
            <a style="padding: 6px" class="btn btn-dark text-white my-1" href="/login.html">masuk</a>
          </li>
          <li class="nav-item nav-hover-1 d-md-none d-block">
            <a style="padding: 6px" class="btn btn-outline-dark my-1" href="/register.html">daftar</a>
          </li>
        </ul>
      </div>

      <div class="clock d-md-block d-none">
        <a href="{{ url() }}" class="btn btn-dark"> Masuk</a>
        <a href="{{ url() }}" class="btn btn-outline-dark"> Daftar</a>
      </div>
    </div>
  </nav>
