<div class="top-banner">
    <div class="container">
        <span>
            dc power visa
        </span>
        <span>
            additional dc sites
            <i class="fas fa-caret-down header-chevron"></i>
        </span>
    </div>
</div>
<nav class="container">
    <figure>
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-header" />
    </figure>
    <ul>
        @foreach ($nav_links as $element)
            <li class="active-link {{ $element['status'] ? 'active-link-condition' : '' }}">
                {!! $loop->last ? $element['text'] . '<i class="fas fa-caret-down header-chevron"></i>' : $element['text'] !!}
            </li>
        @endforeach
    </ul>
    <div class="search-box">
        <input class="search-text" type="text" name="username" placeholder="Search">
        <i class="fas fa-magnifying-glass"></i>
    </div>
</nav>
<section class="jumbo-container">
    <figure>
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron" />
    </figure>
</section>
