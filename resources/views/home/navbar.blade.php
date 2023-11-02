<section class="navbar-item" >
    <nav class="navbar navbar-expand-lg bg-dark"  >
    <div class="container-fluid" style="background-color: white;color: white">
        <a class="navbar-brand" href="#">
            <img src="{{asset('images/logo.jpg')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            <span class="d-inline-block align-text-top">GREEN action Society</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse order-lg-2" id="navbarNav">
            <div class="navbar-nav ms-auto visible--item">
                @if(Route::has('login'))
                    @auth()
                        @csrf
                        <x-app-layout>
                        </x-app-layout>
                    @else
                        <div class="d-flex">
                            <div class="nav-item" style="margin-right: 15px;">
                                <a class="btn btn-primary" id="loginCss" href="{{ route('login') }}">Login</a>
                            </div>
                            <div class="nav-item" style="margin-right: 15px;">
                                <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                            </div>
                        </div>
                    @endauth
                @endif
            </div>
        </div>
        <div class="collapse navbar-collapse order-lg-1" id="navbarNav">
            <ul class="navbar-nav visible--item">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ">Documents</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</section>
