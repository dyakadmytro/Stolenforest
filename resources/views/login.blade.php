<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <style>
        .gradient-border {
    background: linear-gradient(90deg, rgba(63,43,150,1) 0%, rgba(168,192,255,1) 100%);
            padding: 1px;
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans h-screen flex justify-center items-center">

<div class="gradient-border rounded-lg overflow-hidden shadow-2xl w-96">
        <div class="bg-gray-800 p-6">
            <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>
            <form action="/login" method="post">
@csrf
<div class="mb-4">
    <label for="email" class="block text-sm font-medium mb-2">Email:</label>
    <input type="email" id="email" name="email" class="w-full px-4 py-2 bg-gray-700 rounded text-gray-200 border border-gray-700 focus:border-blue-500 focus:outline-none" required>
</div>
<div class="mb-6">
    <label for="password" class="block text-sm font-medium mb-2">Password:</label>
    <input type="password" id="password" name="password" class="w-full px-4 py-2 bg-gray-700 rounded text-gray-200 border border-gray-700 focus:border-blue-500 focus:outline-none" required>
</div>
<div class="flex justify-center">
    <button type="submit" class="px-6 py-2 bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold rounded hover:shadow-md">Login</button>
</div>
</form>
</div>
</div>
</body>
</html>
