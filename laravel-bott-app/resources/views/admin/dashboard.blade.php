<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard - {{ config('app.name', 'Laravel') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        <!-- Navigation -->
        <nav class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <h1 class="text-xl font-bold text-gray-800 dark:text-white">Admin Dashboard</h1>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <button class="text-gray-500 hover:text-gray-700 dark:text-gray-300 dark:hover:text-white">
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main class="py-10">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- Dashboard Cards -->
                <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Stats Card -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Statistics</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">View your site statistics</p>
                        </div>
                    </div>

                    <!-- Users Card -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Users</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">Manage user accounts</p>
                        </div>
                    </div>

                    <!-- Settings Card -->
                    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900 dark:text-white">Settings</h3>
                            <p class="mt-1 text-gray-500 dark:text-gray-400">Configure application settings</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <div class="mt-8">
                    <div class="bg-white dark:bg-gray-800 shadow-sm rounded-lg">
                        <div class="p-6">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-white mb-4">Recent Activity</h2>
                            <div class="border-t border-gray-200 dark:border-gray-700">
                                <ul class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <li class="py-4">
                                        <div class="flex space-x-3">
                                            <div class="flex-1">
                                                <p class="text-sm text-gray-600 dark:text-gray-400">No recent activity</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>
