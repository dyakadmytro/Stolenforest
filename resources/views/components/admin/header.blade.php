<div class="bg-gradient-to-r from-indigo-500 via-purple-600 to-amber-300 p-5 shadow-xl border-b-1 border-indigo-800">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div>
            <a class="block w-20" href="{{route('home')}}">
                <img src="{{ asset('storage/images/logo.svg') }}" alt="stolenforest-logo" title="Home">
            </a>
        </div>

        <!-- Logout Button -->
        <div>
            <a href="/logout" class="text-white hover:text-indigo-500">Logout</a>
        </div>
    </div>
</div>
