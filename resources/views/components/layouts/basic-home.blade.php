<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stolenforest</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @vite('resources/css/app.css')
</head>
<body class="min-h-full w-screen bg-black font-sans">
    <header class="h-50 w-full flex justify-center p-8">
        <a class="block w-40" href="{{route('home')}}">
            <img src="{{ asset('storage/images/logo.svg') }}" alt="stolenforest-logo" title="Stolenforest logo">
        </a>
    </header>
    <div id="root-container" class="my-10">
        {{ $slot }}
    </div>
    <footer class="flex justify-center bg-zinc-950 p-20">
        <div class="flex w-3/5 h-60 my-20">
            <div class="inline-block w-4/5 text-gray-500">
                <p class="">We provide original music and sound design for films, animation, motion graphics, TV, commercial and games!</p>
                <div class="mt-32 space-y-2">
                    <p class="text-gray-600">e-mail: <a href="mailto:stolenforest@gmail.com" class="text-rose-500 hover:underline">stolenforest@gmail.com</a></p>
                    <p class="text-gray-600">telegram: <a href="https://t.me/humanramen" class="text-rose-500 hover:underline">@humanramen</a></p>
                </div>
            </div>
            <div class="inline-block w-1/5 flex flex-col justify-between items-end h-auto">
                <span class="inline-grid grid-cols-1 gap-4 text-gray-100">
                        <a href="https://soundcloud.com/stolen-forest" data-name="soundcloud"><img src="/static/media/soundcloud.0fdd891ea22c38b84bad6f696413c42a.svg" alt="soundcloud" class="h-6 w-6"></a>
                        <a href="https://www.behance.net/stolentiqstudio" data-name="behance"><img src="/static/media/behance.5b4f836e518a2c97e4010fae769b5edf.svg" alt="behance" class="h-6 w-6"></a>
                        <a href="https://vimeo.com/stolentiq" data-name="vimeo"><img src="/static/media/vimeo.605c6fd94feb3aa3a9663849d2b0b0ba.svg" alt="vimeo" class="h-6 w-6"></a>
                        <a href="https://stolenforest.bandcamp.com/" data-name="bandcamp"><img src="/static/media/bandcamp.b15cd6653eeaa4d133c9cfcab12a8114.svg" alt="bandcamp" class="h-6 w-6"></a>
                        <a href="https://www.facebook.com/stolentiqstudio" data-name="facebook"><img src="/static/media/facebook.a273f6c251c5e02ef767dad4c1c1bfa4.svg" alt="facebook" class="h-6 w-6"></a>
                        <a href="https://www.instagram.com/stolentiq_studio" data-name="instagram"><img src="/static/media/instagram.35138208442080e891f11a1b0a790ee7.svg" alt="instagram" class="h-6 w-6"></a>
                </span>
            </div>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>
