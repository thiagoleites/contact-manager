<footer class="fixed bottom-0 left-0 z-20 w-full p-4 bg-white border-t border-gray-200 shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 dark:border-gray-600">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
        @auth
            Logged in {{ auth()->user()->name }}

            <a href="{{ route('auth.logout')}}" class="ml-4 text-[10px] bg-slate-400 text-white rounded py-1.5 px-3">Logout</a>
        @else
            Guess
        @endauth
    </span>
    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
        <li>
            <a href="/" class="hover:underline me-4 md:me-6">Home</a>
        </li>
        <li>
            @auth
            <a href="{{ route('contact.create')}}" class="hover:underline me-4 md:me-6">Add new Contact</a>
            @else
            <a href="{{ route('auth.login') }}" class="hover:underline me-4 md:me-6">Manager Contacts</a>
            @endauth
        </li>
    </ul>
</footer>
