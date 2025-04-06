<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->default('staff');
            $table->foreignId('branch_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('assigned_counter_id')->nullable()->constrained('counters')->nullOnDelete();
            $table->boolean('can_manage_all_branches')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'can_manage_all_branches']);
            $table->dropForeign(['branch_id', 'assigned_counter_id']);
            $table->dropColumn(['branch_id', 'assigned_counter_id']);
        });
    }
};
