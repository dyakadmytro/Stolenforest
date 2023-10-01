<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans h-screen">

<!-- Header -->
<x-admin.header/>

<!-- Main Content -->
<div class="container mx-auto mt-10 flex">

    <!-- Side Menu -->
    <x-admin.sidebar/>

    <!-- Content Section -->
    <main class="w-3/4 ml-10 bg-white p-4 shadow-md rounded">
        <!-- You can yield content here or include another blade section for specific content -->
        {{ $slot }}
    </main>

</div>

</body>
</html>
