<header>
    <div class="container">
        <!-- logo -->
        <a class="logo" href="/">
            <img src="{{asset("images/dc-logo.png")}}" alt="DC logo header">
        </a>
        <!-- menu -->
        <nav>
            <ul>
                @foreach ($links as $link)
                <li>
                    <a class="{{$link["current"] ? "active" : ""}}" href="{{$link["url"]}}">{{$link["text"]}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>