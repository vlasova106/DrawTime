@section('main-menu')

    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between main-menu">
            <a class="py-2" href="/" aria-label="Product"><h5>DrawTime</h5></a>
            <a class="py-2 d-none d-md-inline-block" href="/start_editor">Выбор темы</a>
            <a class="py-2 d-none d-md-inline-block" href="/new">Последние Публикации</a>
            <a class="py-2 d-none d-md-inline-block" href="/home">Мой Профиль</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Интересное</a>

            @guest

                @if (Route::has('register'))
                    <a class="py-2 d-none d-md-inline-block" href="{{ route('login') }}">{{ __('Login') }}</a>

                @endif
                @else

                        <a class="py-2 d-none d-md-inline-block" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
            @endguest
        </nav>
    </header>
