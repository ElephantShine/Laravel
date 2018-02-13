@extends("_layout")

@section("content")
    <div class="wrapper">
        <section id="hero" class="module-hero module-parallax module-overlay-dark-1"
                 data-background="/images/portfolioBanner.png">
            <div class="hero-caption">
                <div class="hero-text">
                    <h1 class="hero-title m-t-70">{{ $blog["Title"] }}</h1>
                    <p class="lead m-t-40">{{ $blog["SubTitle"] }}</p>
                </div>
            </div>
        </section>
        <section id="journal" class="module-sm module-w">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-offset-2">
                        <article class="post">
                            <div class="post-content">
                                {!! $blog["Content"] !!}
                            </div>
                        </article>

                    </div>

                </div>

            </div>
        </section>
    </div>
@endsection