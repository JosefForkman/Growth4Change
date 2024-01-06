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
        Schema::dropIfExists('sponsors');
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('content_blocks', 'is_home');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
