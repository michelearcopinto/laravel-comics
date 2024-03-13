<section class="footer-links">
    <div class="container upper-footer">
        <div class="texts-container">
            <div class="links-container">
                <div>
                    <h2>dc comics</h2>
                    <ul>
                        @foreach ($dc_comics_first as $item)
                            <li>
                                <a href="">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>

                    <h2>shop</h2>
                    <ul>
                        @foreach ($shop_second as $item)
                            <li>
                                <a href="">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h2>dc</h2>
                    <ul>
                        @foreach ($dc_third as $item)
                            <li>
                                <a href="">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <h2>sites</h2>
                    <ul>
                        @foreach ($sites_fourth as $item)
                            <li>
                                <a href="">{{ $item }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="lower-footer">
                <span>
                    All Site Content TM and 2020 &copy; DC Entertainment, unless otherwise <a href="">noted
                        here</a>.&nbsp; All rights
                    reserved.
                    <br>
                    <a href="">Cookies Settings</a>
                </span>
            </div>
        </div>
        <figure></figure>
    </div>
</section>

<section class="footer-accounts dark-element">
    <div class="container">
        <button class="dark-element">sign-up now!</button>
        <div>
            <h3>follow us</h3>
            <div>
                @foreach ($socials_imgs as $social)
                    <figure>
                        <img src="{{ Vite::asset($social) }}" alt="social-image-{{ $loop->index + 1 }}" />
                    </figure>
                @endforeach
            </div>
        </div>
    </div>
</section>
