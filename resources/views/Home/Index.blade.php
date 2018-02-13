@extends("_layout")

@section("content")

    <div class="wrapper">
        <section id="hero" class="module-hero js-fullheight">
            <div id="slides">
                <ul class="slides-container">
                    <li class="module-overlay-dark-1">
                        <img src="/images/banner01.png" alt="banner" title="象晴設計" >
                        @include("Shared._HomeHeroCaption")
                    </li>
                    <li class="module-overlay-dark-1">
                        <img src="/images/banner02.png" alt="banner" titile="象晴設計" >
                        @include("Shared._HomeHeroCaption")
                    </li>
                    <li class="module-overlay-dark-1">
                        <img src="/images/banner03.png" alt="banner" title="象晴設計" >
                        @include("Shared._HomeHeroCaption")
                    </li>
                </ul>
                <nav class="slides-navigation">
                    <a href="#" class="next"><i class="fa fa-angle-right"></i></a>
                    <a href="#" class="prev"><i class="fa fa-angle-left"></i></a>
                </nav>
            </div>
        </section>
        @include("Shared._About")
        @include("Shared._Services")
        @include("Shared._Steps")
        @include("Shared._News")
    </div>

@endsection