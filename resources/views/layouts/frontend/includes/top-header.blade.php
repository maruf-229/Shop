<!-- Nav Bar Start -->
<div class="nav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                    <a href="{{ route('frontend.category') }}" class="nav-item nav-link">Categories</a>
                    @if(auth()->check())
                        <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link">My Account</a>
                    @endif
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                <div class="navbar-nav ml-auto">
                    <div class="nav-item">
                        @guest()
                            <a href="{{ route('login') }}" class="nav-link">Login</a>
                        @endguest
                    </div>
                </div>
                </form>
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->
