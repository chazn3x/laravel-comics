<footer>
    <!-- footer top -->
    <div class="footer-top">
        <div class="container">
            <ul>
                @foreach ($topLinks as $link)
                <li>
                    <a href="{{$link["url"]}}">
                        <img src="{{asset('images/' . $link["img"])}}" alt="{{$link["text"] . ' icon'}}">
                        <span>{{$link["text"]}}</span>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- footer middle -->
    <div class="footer-main">
        <div class="container">
            <!-- links -->
            <div class="col">
                <h3>{{$mainCategories[0]["title"]}}</h3>
                <ul>
                    @foreach ($mainCategories[0]["links"] as $link)
                    <li>
                        <a href="{{$link["url"]}}">{{$link["text"]}}</a>
                    </li>
                    @endforeach
                </ul>
                <h3>{{$mainCategories[1]["title"]}}</h3>
                <ul>
                    @foreach ($mainCategories[1]["links"] as $link)
                    <li>
                        <a href="{{$link["url"]}}">{{$link["text"]}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h3>{{$mainCategories[2]["title"]}}</h3>
                <ul>
                    @foreach ($mainCategories[2]["links"] as $link)
                    <li>
                        <a href="{{$link["url"]}}">{{$link["text"]}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h3>{{$mainCategories[3]["title"]}}</h3>
                <ul>
                    @foreach ($mainCategories[3]["links"] as $link)
                    <li>
                        <a href="{{$link["url"]}}">{{$link["text"]}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- footer bottom -->
    <div class="footer-bottom">
        <div class="container">
            <!-- sign up button -->
            <a class="sign" href="#">sign-up now!</a>
            <!-- socials -->
            <div class="socials">
                <span>follow us</span>
                <div class="icons">
                    <div class="icon">
                        <a href="#">
                            <img src="{{asset("images/footer-facebook.png")}}" alt="Facebook icon">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#">
                            <img src="{{asset("images/footer-twitter.png")}}" alt="Twitter icon">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#">
                            <img src="{{asset("images/footer-youtube.png")}}" alt="YouTube icon">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#">
                            <img src="{{asset("images/footer-pinterest.png")}}" alt="Pinterest icon">
                        </a>
                    </div>
                    <div class="icon">
                        <a href="#">
                            <img src="{{asset("images/footer-periscope.png")}}" alt="Periscope icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>