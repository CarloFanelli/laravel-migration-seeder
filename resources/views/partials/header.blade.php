<header>
    <ul class="nav nav-tabs shadow">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}"
                aria-current="page">HOME</a>
        </li>

        <li class="nav-item">
            <a href="{{ route('today') }}"
                class="nav-link {{ Route::currentRouteName() === 'today' ? 'active' : '' }}">TODAY'S TRAINS</a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">ABOUT</a>
        </li>
    </ul>
</header>
