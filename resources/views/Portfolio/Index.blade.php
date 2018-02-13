@extends("_layout")

@section("content")

    <div class="wrapper">
        <section id="hero" class="module-hero module-parallax module-overlay-dark-1"
                 data-background="/images/portfolioBanner.png">
            <div class="hero-caption">
                <div class="hero-text">
                    <h1 class="hero-title m-t-70">WORK 日常的綻放</h1>
                    <p class="lead m-t-40">過去的經驗加上一直存在的熱情，滿足客戶的需求，我們的未來是越來越迷人的風景！</p>
                </div>
            </div>
        </section>
        <section class="module module-w p-b-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <ul id="filters" class="filters">
                            <li><a href="#" class="current" data-filter="*">全部</a></li>
                            <li><span>⁄</span><a href="#" data-filter=".Logo">LOGO設計</a></li>
                            <li><span>⁄</span><a href="#" data-filter=".Image">形象設計</a></li>
                            <li><span>⁄</span><a href="#" data-filter=".Activity">活動文宣</a></li>
                            <li><span>⁄</span><a href="#" data-filter=".Book">書籍型錄</a></li>
                            <li><span>⁄</span><a href="#" data-filter=".Study">教材編排</a></li>
                            <li><span>⁄</span><a href="#" data-filter=".Print">印刷輸出</a></li>
                            <li><span>⁄</span><a href="#" data-filter=".Wedding">婚卡喜帖</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="works-grid-wrapper">
                <div id="works-grid" class="works-grid works-grid-gutter works-grid-3 works-grid-dark">
                    @foreach ($portfolios as $portfolio)
                        <article class="work-item  {{ join(" ", $portfolio["Category"])  }} ">
                            <div class="work-wrapper">
                                <div class="work-thumbnail">
                                    <img src="/Portfolio/{{ $portfolio["Path"] }}/01.png"
                                         alt="{{ $portfolio["Title"] }} {{ $portfolio["SubTitle"] }}"
                                         title="{{ $portfolio["Title"] }} {{ $portfolio["SubTitle"] }}">
                                </div>
                                <div class="work-caption">
                                    <h3 class="work-title">{{ $portfolio["Title"] }}</h3>
                                    <h6 class="work-category">{{ $portfolio["SubTitle"] }}</h6>
                                </div>
                                <a href="/Portfolios/{{ $portfolio["Path"] }}"
                                   alt="{{ $portfolio["Title"] }}"
                                   title="{{ $portfolio["Title"] }}"
                                   class="work-link"></a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </div>

@endsection("content")
