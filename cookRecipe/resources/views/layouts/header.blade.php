<header id="header">
        {{-- Left Side Of Nav --}}
        <a href="/" class="logo">{{ config('app.name', 'Jungle') }}</a>

        {{-- Right Side Of Nav --}}
            {{-- Authentication Links  --}}
        @guest
        <nav>
            <ul>
                <li><a href="{{ route('Sign') }}">a Chef?</a></li>
            </ul>
        </nav>
        @else
        <nav>
            <ul>
                <li><a href="{{ route('Recipes.index') }}">List Recipe</a></li>
                <li><a href="{{ route('Recipes.create') }}">Make Recipe</a></li>
                <li><a href="/">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    {{-- a diatas sama ini bakal pakai javascript nanti --}}
                </form>
            </ul>
        </nav>
        @endguest
    </header>