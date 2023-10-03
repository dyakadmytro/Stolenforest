<x-layouts.basic-home>

    <div class="min-h-fit min-w-full mb-32">
        <div class="p-10 text-gray-100 text-center text-3xl">
            <h2 class="text-glitch" data-text="Portfolio">Portfolio</h2>
        </div>
        <x-carousel :projects="$projects" filter="grayscale" filterHover="hover:grayscale-0"/>
    </div>
    <div class="min-h-fit my-32">
        <div class="p-10 text-gray-100 w-full text-center text-3xl">
            <h2 class="text-glitch" data-text="Fun">Fun</h2>
        </div>
        <x-carousel :projects="$projects" filter="hue-rotate-90" filterHover="hover:hue-rotate-15"/>
    </div>
</x-layouts.basic-home>
