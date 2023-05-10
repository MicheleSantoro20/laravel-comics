<header class="header">
    <div class="logoimg"><img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt=""></div>
    <ul>
        @foreach ($dbHeader as $element)
            <li class="header-navbar" href="#"> {{ $element }}</li>
        @endforeach
    </ul>
</header>