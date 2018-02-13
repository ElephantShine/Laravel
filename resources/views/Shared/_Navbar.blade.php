<nav class="navbar navbar-fixed-top navbar-custom navbar-transparent">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route("index") }}" alt="象晴設計" title="象晴設計">象晴設計</a>
        </div>
        <div class="collapse navbar-collapse" id="custom-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route("index") }}" alt="首頁" title="首頁">HOME</a></li>
                <li><a href="{{ route("portfolio") }}" alt="作品集" title="作品集" >PORTFOLIO</a></li>
                <li><a href="{{ route("contact") }}" alt="聯絡我們" title="聯絡我們">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>