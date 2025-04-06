<?php

use App\Livewire\Pages\Admin\{Dashboard as AdminDashboard, BranchesManagement, CountersManagement, Reports};
use App\Livewire\Pages\Staff\{Dashboard as StaffDashboard, QueueManagement};
use App\Livewire\Users\ListUsers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Main Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Routes
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
    Route::get('/admin/branches', BranchesManagement::class)->name('admin.branches');
    Route::get('/admin/counters', CountersManagement::class)->name('admin.counters');
    Route::get('/admin/reports', Reports::class)->name('admin.reports');
    Route::get('/admin/users', ListUsers::class)->name('admin.users');

    // Staff Routes
    Route::get('/staff/dashboard', StaffDashboard::class)->name('staff.dashboard');
    Route::get('/staff/queue', QueueManagement::class)->name('staff.queue');
});
