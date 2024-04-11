<div id="navbar" class="bar my-display">

    <div class="my-display">
        <img src="{{ Vite::asset('public/img/dc-logo.png') }}" alt="DC-Logo">
    </div>

    <div class="text">
        <div>
            <ul id="nav-list">
                @foreach($links as $linkList)
                    @foreach($linkList['list'] as $currentLink)
                        <li class="links pointer">{{ $currentLink }}</li>
                    @endforeach
                @endforeach
            </ul>
        </div>
    </div>

</div>
