
<x-layout>    
    <div class="container">
        <div class="jumbotron">
        <h1><i class="fa fa-camera-retro" aria-hidden="true"></i> Moje fotky z vyletov</h1>
        <p>Malý web projekt ako sučasť akadémie vo Wezeu. Technoloógie: Laravel, Bootsrtrap.</p>
        </div>
        <div class="row">
            @foreach ($photos as $photo)
                <x-photo :photo="$photo"></x-photo>
            @endforeach
        </div>
    </div>
</x-layout>