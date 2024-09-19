<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('article.index')}}">Logo</a>
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarsExample01" style="">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('article.index')}}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Link</a>
                </li>
                @auth
                {{-- auth --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i>
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('articles.create')}}">Crea articolo</a></li>
                        <li class="dropdown-item">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger">Logout</button>
                            </form>
                        </li>
                        </ul>
                    </li>
                @else
                {{-- guest --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person"></i>
                            Utente
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
            {{-- <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form> --}}
        </div>
    </div>
</nav>