@if ($admin)
    <nav class="flex flex-row justify-between m-0 p-0 bg-yellow-300 w-full">

            <a href="/admin/">
                <img src="{{asset('images/logo.png')}}" alt="logo" width="100">
            </a>

            <button class="p-4 outline-none focus:outline-none" id="menu-btn">
                <i class="fas fa-list-ul fa-2x"></i>
            </button>
    </nav>

    <div class="h-full hidden bg-black fixed overflow-hidden top-0 p-5 z-50 drawer-close" id="menu">
        <ul class="overflow-hidden">
            <li class="li-nav mt-5">
                <a href="/admin/users" class="nav-a">Users</a>
            </li>
            <li class="li-nav">
                <a href="/admin/movies">Movies</a>
            </li>
            <li class="li-nav">
                <a href="/admin/cinemas">Cinemas</a>
            </li>
            @if(Auth::check())
                <form action="/admin/logout" method="GET" class="li-nav">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
            <li class="li-nav">
                <a href="/admin/login">login</a>
            </li>
            @endif
            
        </ul>
    </div>

@else

<nav class="flex flex-row justify-between m-0 p-0 bg-yellow-300 w-full">
    <a href="/">
        <img src="{{asset('images/logo.png')}}" alt="logo" width="100">
    </a>

    <button class="p-4 outline-none focus:outline-none" id="menu-btn">
        <i class="fas fa-list-ul fa-2x"></i>
    </button>
</nav>

<div class="h-full hidden bg-black fixed overflow-hidden top-0 p-5 z-50 drawer-close" id="menu">
    <ul class="overflow-hidden">
        <li class="li-nav mt-5">
            <a href="/movies">Browse</a>
        </li>
        <li class="li-nav">
            <a href="/cinemas">Cinemas</a>
        </li>
        <li class="li-nav">
            <a href="/contact">Contact us</a>
        </li>
    </ul>
</div>

@endif