<aside class="fixed lg:sticky top-0 h-screen bg-indigo-600 text-white transition-all duration-300 ease-in-out z-30"
           :class="{
               'translate-x-0': sidebarOpen,
               '-translate-x-full': !sidebarOpen,
               'w-64': !isCollapsed,
               'w-20': isCollapsed
           }">
        <!-- Toggle Buttons -->
        <button @click="sidebarOpen = false"
                class="lg:hidden absolute right-0 top-0 mt-4 -mr-12 p-4 rounded-r-lg bg-indigo-600 text-white focus:outline-none">
            <i class="fas fa-times text-xl"></i>
        </button>
        <button @click="isCollapsed = !isCollapsed"
                class="hidden lg:block absolute right-0 top-0 mt-4 -mr-12 p-4 rounded-r-lg bg-indigo-600 text-white focus:outline-none">
            <i class="fas" :class="isCollapsed ? 'fa-angle-right' : 'fa-angle-left'"></i>
        </button>
        <!-- Logo -->
        <div class="px-4 py-6 flex flex-col items-center">
            <div class="flex items-center justify-center w-full">
                <div class="text-center">
                    <div class="flex items-center justify-center mb-2">
                        <i class="fas fa-ticket-alt text-3xl"></i>
                    </div>
                    <span class="text-lg font-bold" x-show="!isCollapsed">QMaster</span>
                </div>
            </div>

            <!-- Profile Section -->
            <div class="mt-6 w-full" x-show="!isCollapsed">
                <div class="relative" @click.away="profileOpen = false">
                    <button @click="profileOpen = !profileOpen"
                            class="w-full flex items-center justify-between p-3 rounded-xl transition duration-300 ease-in-out hover:bg-indigo-700 hover:text-white">
                        <div class="flex items-center">
                            <img class="w-8 h-8 rounded-full object-cover"
                                 src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=6366f1&color=fff"
                                 alt="Profile">
                            <div class="ml-3 text-left">
                                <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                                <p class="text-xs text-indigo-200">Super Admin</p>
                            </div>
                        </div>
                        <i class="fas fa-chevron-down text-sm transition-transform duration-200"
                           :class="{ 'transform rotate-180': profileOpen }"></i>
                    </button>

                    <!-- Dropdown Menu -->
                    <div x-show="profileOpen"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute left-0 right-0 mt-2 bg-white rounded-xl shadow-lg z-50 py-1">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                        <div class="border-t border-gray-100"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Log Out</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="flex-1 py-8 px-4">
            <div class="space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center rounded-xl p-3 transition duration-300 ease-in-out bg-indigo-700/50 hover:bg-indigo-700 hover:text-white" :class="{ 'justify-center': isCollapsed }">
                    <i class="fas fa-th-large text-xl"></i>
                    <span class="ml-4" x-show="!isCollapsed">Dashboard</span>
                </a>
                <a href="{{ route('admin.branches') }}" class="flex items-center rounded-xl p-3 transition duration-300 ease-in-out hover:bg-indigo-700 hover:text-white" :class="{ 'justify-center': isCollapsed }">
                    <i class="fas fa-building text-xl"></i>
                    <span class="ml-4" x-show="!isCollapsed">Branches</span>
                </a>
                <a href="{{ route('admin.counters') }}" class="flex items-center rounded-xl p-3 transition duration-300 ease-in-out hover:bg-indigo-700 hover:text-white" :class="{ 'justify-center': isCollapsed }">
                    <i class="fas fa-desktop text-xl"></i>
                    <span class="ml-4" x-show="!isCollapsed">Counters</span>
                </a>
                <a href="{{ route('admin.users') }}" class="flex items-center rounded-xl p-3 transition duration-300 ease-in-out hover:bg-indigo-700 hover:text-white" :class="{ 'justify-center': isCollapsed }">
                    <i class="fas fa-users text-xl"></i>
                    <span class="ml-4" x-show="!isCollapsed">Staff</span>
                </a>
                <a href="{{ route('admin.reports') }}" class="flex items-center rounded-xl p-3 transition duration-300 ease-in-out hover:bg-indigo-700 hover:text-white" :class="{ 'justify-center': isCollapsed }">
                    <i class="fas fa-chart-line text-xl"></i>
                    <span class="ml-4" x-show="!isCollapsed">Reports</span>
                </a>
                <a href="#" class="flex items-center rounded-xl p-3 transition duration-300 ease-in-out hover:bg-indigo-700 hover:text-white" :class="{ 'justify-center': isCollapsed }">
                    <i class="fas fa-cogs text-xl"></i>
                    <span class="ml-4" x-show="!isCollapsed">Settings</span>
                </a>
            </div>
        </nav>

        <!-- Collapsed Profile at Bottom -->
        <div class="px-4 pb-8" x-show="isCollapsed">
            <div class="relative" @click.away="profileOpen = false">
                <button @click="profileOpen = !profileOpen"
                        class="p-3 rounded-xl transition duration-300 ease-in-out hover:bg-indigo-700 hover:text-white w-full flex justify-center">
                    <img class="w-8 h-8 rounded-full object-cover"
                         src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=6366f1&color=fff"
                         alt="Profile">
                </button>

                <!-- Dropdown for Collapsed State -->
                <div x-show="profileOpen"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute bottom-full right-0 mb-2 w-48 bg-white rounded-xl shadow-lg z-50 py-1">
                    <div class="px-4 py-2 border-b border-gray-100">
                        <p class="text-sm font-medium text-gray-900">{{ Auth::user()->name }}</p>
                        <p class="text-xs text-gray-500">Administrator</p>
                    </div>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
                    <div class="border-t border-gray-100"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-gray-100">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </aside>
