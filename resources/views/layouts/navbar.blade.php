@if(Auth::check() && !Request::is('home'))
<nav class="navbar navbar-expand-lg  navbar-dark bg-purple ">
        <a class="navbar-brand mr-auto mr-lg-0" href="#">
            <img style = "width:30px;height:30px" src="{{asset('storage/images/firebase.png')}}" alt="">
        </a>
        <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Switch account</a>
                </li>
                <li class="nav-item dropdown" style= "float:right">
                    <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">Marvin jude</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
            @if (Request::is('softwares'))
                <form class="form-inline my-2 my-lg-0" action = "{{route('softwares')}}" method="GET">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name = "term">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            @endif
        </div>
    </nav>
@endif