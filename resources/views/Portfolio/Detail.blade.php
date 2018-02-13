@extends("_layout")

@section("content")
    <div class="wrapper">
        <section class="module module-w">
            <div class="container">
                <div class="row m-b-70">
                    <div class="col-sm-8 col-sm-offset-2">
                        <h2>{{ $portfolio["Title"] }}</h2>
                        <h3>{{ $portfolio["SubTitle"] }}</h3>
                        {!! $portfolio["Content"] !!}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        @for ($i = 1; $i <= $portfolio["ImgCount"]; $i++)
                            <p class="project-gallery">
                                <a href="/Portfolio/{{ $portfolio["Path"] }}/{{ str_pad($i, 2, "0", STR_PAD_LEFT) }}.png"
                                   class="project-gallery"
                                   alt="{{ $portfolio["Title"] }}"
                                   title="{{ $portfolio["Title"] }}">
                                    <img src="/Portfolio/{{ $portfolio["Path"] }}/{{ str_pad($i,2,"0", STR_PAD_LEFT) }}.png"
                                         alt="{{ $portfolio["Title"] }}"
                                         title="{{ $portfolio["Title"] }}">
                                </a>
                            </p>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection