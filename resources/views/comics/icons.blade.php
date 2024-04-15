<div id="app-features">
    <div id="icons-cnt" class="pointer">
        @foreach($icons as $icon)
            <div>
                <img class="w-100 h-100" src="{{ $icon['icon'] }}" alt="{{ $icon['caption'] }}">
            </div>
            <div>
                <p>{{ $icon['caption'] }}</p>
            </div>
        @endforeach
    </div>
</div>