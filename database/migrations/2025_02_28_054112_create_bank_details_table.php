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
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id();
            $table->integer("user_id");
            $table->string("holder_name");
            $table->string("bank_name");
            $table->string("account_number");
            $table->string("ifsc");
            $table->string("google_pe")->nullable();
            $table->string("phonepe")->nullable();
            $table->string("paytm")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_details');
    }
};
