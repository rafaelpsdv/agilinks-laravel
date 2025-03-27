
<div>
    <header class="ui menu">
        <a href="/" class="header item">Agilinks</a>

        @auth
            <a href="{{ route('links.index') }}" class="item">Links</a>
            <a href="{{ route('collections.index') }}" class="item">Collections</a>
        @endauth
        @guest
            <div class="right menu">
                <a href="{{ route('login') }}" class="item">Login</a>
                <a href="{{ route('register') }}" class="item">Register</a>
            </div>
        @endguest
        </header>
    
    <div class="ui hidden section divider"></div>    
</div>