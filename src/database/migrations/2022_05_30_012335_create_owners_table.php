<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->uuid()->default(DB::raw('(UUID())'))->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('zipcode');
            $table->string('prefecture');
            $table->string('city');
            $table->string('street_address');
            $table->string('tel');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('owners');
    }
};
