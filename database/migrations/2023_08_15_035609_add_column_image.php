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
        Schema::table('mempelai_pria', function (Blueprint $table) {
            $table->string('image', 255)->nullable()->after('username_ig');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mempelai_pria', function (Blueprint $table) {
            if (Schema::hasColumn('mempelai_pria', 'image')) {
                $table->dropColumn('iamge');
            }
        });
    }
};
