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
        Schema::table('footer_details', function (Blueprint $table) {
            $table->string("footer_line");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('footer_details', function (Blueprint $table) {
            $table->dropColumn("footer_line");
        });
    }
};
