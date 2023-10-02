<div class="gallery js-flickity bg-gray-200 text-center" data-flickity='{ "cellAlign": "left", "contain": true }'>
    @foreach($projects as $project)
    <div class="gallery-cell mx-5 grayscale text-zinc-400 transition-all duration-500 hover:grayscale-0 hover:text-zinc-300">
        <p class="m-3 text-lg">{{$project->name}}</p>
        <div class="w-80 h-80 bg-zinc-900">
            <a href="{{$project->link}}" target="__blank" draggable="false">
                <img src="{{'storage/'.$project->cover->path}}" alt="{{$project->name}}" draggable="false">
            </a>
        </div>
        <p class="m-3 text-base">
            <span>2d</span>
        </p>
    </div>
    @endforeach
</div>

