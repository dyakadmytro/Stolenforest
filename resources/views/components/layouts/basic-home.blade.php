<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stolenforest</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans h-screen">

<!-- Main Content -->
<div class="">

    {{ $slot }}

</div>

</body>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</html>
