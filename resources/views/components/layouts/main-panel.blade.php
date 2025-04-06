<div class="min-h-screen flex bg-gray-50" x-data="{ sidebarOpen: true, isCollapsed: false, profileOpen: false }">
    <!-- Backdrop -->
    <div x-show="sidebarOpen"
         @click="sidebarOpen = false"
         class="fixed inset-0 bg-gray-900/50 lg:hidden z-20"
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"></div>

    <!-- Sidebar -->
    <livewire:components.admin.sidebar />

    <!-- Main Content -->
    <main class="flex-1 min-w-0 overflow-auto">
        <!-- Mobile Menu Button -->
        <button @click="sidebarOpen = true"
                class="lg:hidden fixed left-4 top-4 p-2 rounded-lg bg-indigo-600 text-white hover:bg-indigo-700 focus:outline-none z-20">
            <i class="fas fa-bars text-xl"></i>
        </button>

        <!-- Page Content -->
        <div class="relative" :class="{ 'ml-20': isCollapsed, 'ml-64': !isCollapsed }">
            {{$slot}}
        </div>
    </main>
</div>