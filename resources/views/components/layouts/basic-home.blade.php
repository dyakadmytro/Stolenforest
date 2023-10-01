<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stolenforest</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-b from-slate-900 from-10% via-sky-950 via-30% to-gray-800 to-90% font-sans h-screen">
    <div class="h-50 w-full flex justify-center p-8">
        <a class="block w-40" href="/">
            <img src="{{ asset('storage/images/logo.svg') }}" alt="stolenforest-logo" title="Stolenforest logo">
        </a>
    </div>
    <div class="">
        {{ $slot }}
    </div>
</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>
