<nav class="navbar navbar-expand-md fixed-top px-5" style="padding: 0px; height: 67px">
    <div class="container inner-navbar d-flex justify-content-between">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="black" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>

        </button>
        <a href="#home" class="d-flex text-decoration-none">
            <img src="{{ url('assets/images/icon.png') }}" alt="" class="logo" />

        </a>



        <div class="collapse navbar-collapse menu rounded-2 justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item nav-hover-1">
                    <a style="" class="nav-link" href="{{ url('#beranda') }}">Beranda</a>
                </li>
                <li class="nav-item nav-hover-1">
                    <a style="" class="nav-link" href="{{ url('#alur') }}">Skema</a>
                </li>
                <li class="nav-item nav-hover-1">
                    <a style="" class="nav-link" href="{{ url('#lomba') }}">Lomba</a>
                </li>

                <li class="nav-item nav-hover-1">
                    <a style="" class="nav-link" href="{{ url('#faq') }}">FAQ</a>
                </li>






                @auth
                    <li style='list-style: none;  margin: 0 0 20px 0' <?php
                    if ($dt == 'register') {
                        echo "class='nav-item active dropdown d-md-none d-block'  ";
                    } else {
                        echo "class='nav-item dropdown d-md-none d-block' ";
                    }
                    ?>>
                        <a class="nav-item dropdown-toggle text-decoration-none " href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->nama }}
                        </a>
                        <ul class="dropdown-menu mx-3" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-center" href="{{ url('dashboard/profile') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                                        <path
                                            d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z" />
                                        <path
                                            d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z" />
                                    </svg> Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li class="mx-3">
                                <style>
                                    button,
                                    input[type="submit"],
                                    input[type="reset"] {
                                        background: none;
                                        color: inherit;
                                        border: none;
                                        padding: 0;
                                        font: inherit;
                                        cursor: pointer;
                                        outline: inherit;
                                    }
                                </style>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="dropdown-item text-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                            <path fill-rule="evenodd"
                                                d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                        </svg> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li <?php if ($dt == 'register') {
                        echo "class='nav-item active d-md-none d-block nav-hover-1'";
                    } else {
                        echo "class='nav-item d-md-none d-block nav-hover-1'";
                    } ?>>
                        <a style="padding: 6px" class="btn btn-dark text-white my-1" href="{{ url('/login') }}">Masuk</a>
                    </li>
                    <li <?php if ($dt == 'register') {
                        echo "class='nav-item active d-md-none d-block nav-hover-1'";
                    } else {
                        echo "class='nav-item d-md-none d-block nav-hover-1'";
                    } ?>>
                        <a style="padding: 6px" class="btn btn-outline-dark my-1" href="{{ url('/register') }}">Daftar</a>
                    </li>
                @endauth
            </ul>
        </div>

        <div class="clock d-md-block d-none">
            @auth
                <li style='list-style: none' style='list-style: none' <?php
                if ($dt == 'register') {
                    echo "class='nav-item active dropdown'";
                } else {
                    echo "class='nav-item dropdown'";
                }
                ?>>
                    <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ auth()->user()->nama }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" style="font-size: 16px; font-weight: 500; color: black"
                                href="{{ url('dashboard/profile') }}"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor"
                                    class="bi bi-layout-text-window-reverse" viewBox="0 0 16 16">
                                    <path
                                        d="M13 6.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm0 3a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5zm-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1h5z" />
                                    <path
                                        d="M14 0a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12zM2 1a1 1 0 0 0-1 1v1h14V2a1 1 0 0 0-1-1H2zM1 4v10a1 1 0 0 0 1 1h2V4H1zm4 0v11h9a1 1 0 0 0 1-1V4H5z" />
                                </svg> Dashboard</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <style>
                                button,
                                input[type="submit"],
                                input[type="reset"] {
                                    background: none;
                                    color: inherit;
                                    border: none;
                                    padding: 0;
                                    font: inherit;
                                    cursor: pointer;
                                    outline: inherit;
                                }
                            </style>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="dropdown-item" style="font-size: 16px; font-weight: 500; color: black">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                                        <path fill-rule="evenodd"
                                            d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                                    </svg> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li <?php if ($dt == 'register') {
                    echo "class='nav-item active d-none d-md-block nav-hover-1'";
                } else {
                    echo "class='nav-item d-none d-md-block nav-hover-1'";
                } ?>>
                    <a style="padding: 6px" class="btn btn-dark text-white my-1" href="{{ url('/login') }}">Masuk</a>
                {{-- </li>
                <li <?php if ($dt == 'register') {
                    echo "class='nav-item active d-none d-md-block nav-hover-1'";
                } else {
                    echo "class='nav-item d-none d-md-block nav-hover-1'";
                } ?>> --}}
                    <a style="padding: 6px" class="btn btn-outline-dark my-1" href="{{ url('/register') }}">Daftar</a>
                </li>
            @endauth
        </div>
    </div>
</nav>
