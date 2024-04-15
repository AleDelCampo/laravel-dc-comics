<div id="footer-cnt">
    <div id="links-cnt">
        <div id="footer-list">
            @foreach($linkss as $linkList)
                <div class="links-list">
                    
                    <ul>
                        <h4>{{ $linkList['title'] }}</h4>
                        @foreach($linkList['list'] as $currentLink)
                            <li class="pointer">{{ $currentLink }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

    <div id="img-cnt">
        <img src="{{ Vite::asset('/public/img/dc-logo-bg.png') }}" alt="Footer-Logo">
    </div>
</div>

<div id="socials-footer" class="my-display">

    <div>
        <button class="button pointer">
            SIGN-UP NOW!
        </button>
    </div>

    <div class="my-display">

        <span class="pointer">
            FOLLOW US
        </span>

        <div class="my-display footer-icons-cnt">
           <img class="pointer" src="{{ Vite::asset('/public/img/footer-facebook.png') }}" alt="Facebook">
           <img class="pointer" src="{{ Vite::asset('/public/img/footer-twitter.png') }}" alt="X">
           <img class="pointer" src="{{ Vite::asset('/public/img/footer-youtube.png') }}" alt="Youtube">
           <img class="pointer" src="{{ Vite::asset('/public/img/footer-pinterest.png') }}" alt="Pinterest">
           <img class="pointer" src="{{ Vite::asset('/public/img/footer-periscope.png') }}" alt="Periscope">
        </div>

    </div>
</div>