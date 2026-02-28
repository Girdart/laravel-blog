<nav class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('posts.index') }}" class="text-xl font-bold text-gray-900 dark:text-gray-100">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <!-- Links -->
            <div class="hidden sm:flex space-x-4">
                <a href="{{ route('posts.index') }}"
                   class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Posts</a>
                @auth
                    <a href="{{ route('posts.create') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Create
                        Post</a>
                @endauth
            </div>

            <!-- User -->
            <div class="hidden sm:flex items-center space-x-4">
                @auth
                    <span class="text-gray-700 dark:text-gray-300">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                                class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Log
                            Out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Login</a>
                    <a href="{{ route('register') }}"
                       class="text-gray-700 dark:text-gray-300 hover:text-gray-900 dark:hover:text-white">Register</a>
                @endauth
            </div>
        </div>
    </div>
</nav>
